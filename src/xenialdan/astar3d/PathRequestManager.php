<?php


namespace xenialdan\astar3d;


use pocketmine\math\Vector3;

class PathRequestManager
{


    /** @var \SplQueue<PathRequest> */
    public $pathRequestQueue;
    /** @var PathRequest */
    public $currentPathRequest;

    /** @var Pathfinder */
    public $pathfinder;
    /** @var bool */
    public $isProcessingPath;
    /** @var PathRequestManager */
    public static $instance;

    public function FinishedProcessingPath(Vector3 $path, bool $success)
    {
        $this->currentPathRequest->callback($path, $success);
        $this->isProcessingPath = false;
        $this->TryProcessNext();
    }

    public function TryProcessNext()
    {
        if (!$this->isProcessingPath && $this->pathRequestQueue->count() > 0) {
            $this->currentPathRequest = $this->pathRequestQueue->dequeue();
            $this->isProcessingPath = true;
            $this->pathfinder->StartFindingPath($this->currentPathRequest->pathStart, $this->currentPathRequest->pathEnd);
        }
    }

    public static function RequestPath(Vector3 $pathStart, Vector3 $pathEnd, callable $callback): void
    {
        $newRequest = new PathRequest($pathStart, $pathEnd, $callback);
        self::$instance->pathRequestQueue->enqueue($newRequest);
        self::$instance->TryProcessNext();
    }
}

class PathRequest
{
    /** @var Vector3 */
    public $pathStart;
    /** @var Vector3 */
    public $pathEnd;
    public $callback;

    public function __construct(Vector3 $_pathStart, Vector3 $_pathEnd, callable $callback)
    {
        $this->pathStart = $_pathStart;
        $this->pathEnd = $_pathEnd;
        $this->callback = $callback;
    }
}
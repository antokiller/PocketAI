<?php

namespace xenialdan\PocketAI\component\minecraft;

use xenialdan\PocketAI\component\BaseComponent;
use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _equipment implements BaseComponent
{
    protected $name = "minecraft:equipment";
    private $table;

    /**
     * Sets the Equipment table to use for this Entity.
     * _equipment constructor.
     * @param string $table The path to the equipment table, relative to the Behavior Pack's root
     */
    public function __construct(string $table)
    {
        $this->table = $table;
    }

    /**
     * Applies the changes to the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function apply($entity): void
    {
        // TODO: Implement apply() method.
    }

    /**
     * Removes the changes from the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function remove($entity): void
    {
        // TODO: Implement remove() method.
    }
}

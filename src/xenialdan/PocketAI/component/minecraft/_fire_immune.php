<?php

namespace xenialdan\PocketAI\component\minecraft;

use xenialdan\PocketAI\component\BaseComponent;
use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _fire_immune implements BaseComponent
{
    protected $name = "minecraft:fire_immune";
    private $value = true;

    /**
     * Sets that this entity doesn't take damage from fire.
     * _fire_immune constructor.
     */
    public function __construct()
    {
    }

    /**
     * Applies the changes to the mob
     * @param AIEntity|AIProjectile $entity
     */
    public
    function apply($entity): void
    {
        // TODO: Implement apply() method.
    }

    /**
     * Removes the changes from the mob
     * @param AIEntity|AIProjectile $entity
     */
    public
    function remove($entity): void
    {
        // TODO: Implement remove() method.
    }
}

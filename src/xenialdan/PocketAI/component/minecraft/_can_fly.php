<?php

namespace xenialdan\PocketAI\component\minecraft;

use xenialdan\PocketAI\component\BaseComponent;
use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _can_fly implements BaseComponent
{
    protected $name = "minecraft:can_fly";
    private $value = true;


    /**
     * Marks the entity as being able to fly, the pathfinder won't be restricted to paths where a solid block is required underneath it.
     * _can_fly constructor.
     */
    public function __construct()
    {

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

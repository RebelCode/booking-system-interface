<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use stdClass;
use Traversable;

/**
 * Something that is aware of a list of resource IDs.
 *
 * @since [*next-version*]
 */
interface ResourceIdsAwareInterface
{
    /**
     * Retrieves the IDs of the bookable resources.
     *
     * @since [*next-version*]
     *
     * @return int[]|string[]|Stringable[]|stdClass|Traversable The list of bookable resource IDs.
     */
    public function getResourceIds();
}

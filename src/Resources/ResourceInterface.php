<?php

namespace RebelCode\Bookings\Resources;

use Dhii\Data\IdAwareInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Represents a resource - something that can be booked.
 *
 * @since [*next-version*]
 */
interface ResourceInterface extends IdAwareInterface
{
    /**
     * Retrieves the resource's type - a string that categorizes the resource.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The resource's type string.
     */
    public function getType();

    /**
     * Retrieves how many times the resource may be booked at the same time, if applicable.
     *
     * @since [*next-version*]
     *
     * @return int A positive integer for limited concurrency, or zero for unlimited concurrency.
     */
    public function getConcurrency();
}

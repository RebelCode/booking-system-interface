<?php

namespace RebelCode\Bookings;

use Dhii\Data\IdAwareInterface;
use Dhii\Time\PeriodInterface;

/**
 * Represents a booking as an identifiable period of time during which a set of resources are reserved.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    /* @since [*next-version*] */
    IdAwareInterface,
    /* @since [*next-version*] */
    PeriodInterface,
    /* @since [*next-version*] */
    ResourceIdsAwareInterface
{
}

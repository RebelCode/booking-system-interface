<?php

namespace RebelCode\Bookings\Availability;

use Dhii\Time\PeriodInterface;
use RebelCode\Bookings\Resources\ResourceIdsAwareInterface;

/**
 * Represents a period of time during which a set of resources are available.
 *
 * @since [*next-version*]
 */
interface AvailabilityPeriodInterface extends PeriodInterface, ResourceIdsAwareInterface
{
}

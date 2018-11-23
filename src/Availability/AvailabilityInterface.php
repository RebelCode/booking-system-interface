<?php

namespace RebelCode\Bookings\Availability;

use Dhii\Time\PeriodInterface;
use stdClass;
use Traversable;

/**
 * Represents an availability.
 *
 * An availability is an entity that is capable of providing consumers with lists of available periods of time that lie
 * within a given range. These periods of time are not required to be entirely within the range and may start/end
 * outside the range. This behavior allows for simpler availability implementations, since they won't need to assume or
 * accept that configuration from consumers. Consumers are still free to "clamp" any periods in the returned list, if
 * that suits their needs.
 *
 * @since [*next-version*]
 */
interface AvailabilityInterface
{
    /**
     * Retrieves the available time periods in a given time range.
     *
     * @since [*next-version*]
     *
     * @param PeriodInterface $range The range of time for which to retrieve available periods.
     *
     * @return AvailabilityPeriodInterface[]|stdClass|Traversable The list of available periods of time.
     */
    public function getAvailablePeriods(PeriodInterface $range);
}

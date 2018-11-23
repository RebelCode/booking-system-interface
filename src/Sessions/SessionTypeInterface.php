<?php

namespace RebelCode\Bookings\Sessions;

use Dhii\Time\PeriodInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that represents a specific type of session.
 *
 * Objects that implement this interface are intended to be used by session generator implementations during generation.
 *
 * @since [*next-version*]
 */
interface SessionTypeInterface
{
    /**
     * Retrieves the session that starts at a particular time, within a session generation period.
     *
     * The returned session does not necessarily need to start at the given time. For instance, a particular type of
     * session may require 15 minutes of padding time, and thus the session may start 15 minutes after $time.
     *
     * The `in` and `out` times represent the time that is actually blocked when the session is booked. For most
     * cases, these times will be equal to the session's `start` and `end` times, but may be used to block additional
     * or less time. Padding time is an example of blocking more time using a smaller `in` and/or a larger `out`.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable $time  The timestamp for the time at which to retrieve the session.
     * @param PeriodInterface       $range The session generation time range.
     *
     * @return array An array containing the session data. Must have at least the following keys:
     *               * "in"    => the time at which the session begins reserving time
     *               * "out"   => the time at which the session stops reserving time
     *               * "start" => the start time of the session
     *               * "end"   => the end time of the session
     */
    public function getSessionAt($time, PeriodInterface $range);
}

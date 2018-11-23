<?php

namespace RebelCode\Bookings\Sessions;

use Dhii\Time\PeriodInterface;
use stdClass;
use Traversable;

/**
 * Something that generates sessions.
 *
 * @since [*next-version*]
 */
interface SessionGeneratorInterface
{
    /**
     * Generates sessions within a given range.
     *
     * @since [*next-version*]
     *
     * @param PeriodInterface $range The range of time in which to generate sessions.
     *
     * @return array|stdClass|Traversable A list of generated sessions.
     */
    public function generate(PeriodInterface $range);
}

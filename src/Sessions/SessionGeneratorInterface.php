<?php

namespace RebelCode\Bookings\Sessions;

use RebelCode\Bookings\Availability\AvailabilityPeriodInterface;
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
     * @param AvailabilityPeriodInterface                 $period       The availability period to generate for.
     * @param SessionTypeInterface[]|stdClass|Traversable $sessionTypes The types of sessions to generate.
     *
     * @return array|stdClass|Traversable A list of generated sessions.
     */
    public function generate(AvailabilityPeriodInterface $period, $sessionTypes);
}

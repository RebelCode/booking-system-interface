<?php

namespace RebelCode\Bookings\Sessions;

use Dhii\Util\String\StringableInterface as Stringable;
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
     * @param int|string|Stringable $start The start timestamp of the generation period.
     * @param int|string|Stringable $end   The end timestamp of the generation period.
     *
     * @return array|stdClass|Traversable A list of generated sessions.
     */
    public function generate($start, $end);
}

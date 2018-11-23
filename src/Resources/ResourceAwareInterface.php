<?php

namespace RebelCode\Bookings\Resources;

/**
 * Something that is aware of, and can provide, a resource instance.
 *
 * @since [*next-version*]
 */
interface ResourceAwareInterface
{
    /**
     * Retrieves the resource associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ResourceInterface|null The resource instance, if any.
     */
    public function getResource();
}

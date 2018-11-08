<?php

namespace RebelCode\Bookings;

/**
 * Something that is aware of, and can provide, a booking instance.
 *
 * @since [*next-version*]
 */
interface BookingAwareInterface
{
    /**
     * Retrieves the booking associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return BookingInterface|null The booking instance.
     */
    public function getBooking();
}

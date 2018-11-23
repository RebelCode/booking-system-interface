<?php

namespace RebelCode\Bookings\Resources;

use Dhii\Factory\FactoryInterface;

/**
 * A factory that can create resource instances.
 *
 * @since [*next-version*]
 */
interface ResourceFactoryInterface extends FactoryInterface
{
    /**
     * The key for the ID in the factory config.
     *
     * @since [*next-version*]
     */
    const K_DATA_ID = 'id';

    /**
     * The key for the resource type in the factory config.
     *
     * @since [*next-version*]
     */
    const K_DATA_TYPE = 'type';

    /**
     * The key for the resource concurrency count in the factory config.
     *
     * @since [*next-version*]
     */
    const K_DATA_CONCURRENCY = 'concurrency';

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ResourceInterface The created resource.
     */
    public function make($config = null);
}

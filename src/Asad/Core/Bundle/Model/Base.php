<?php

namespace Asad\Core\Bundle\Model;

use Symfony\Component\DependencyInjection\ContainerInterface;

class Base
{
    protected $container;

    /**
     * Inject the service container
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Returns true if the service id is defined.
     *
     * @param string $id The service id
     * @return Boolean true if the service id is defined, false otherwise
     */
    public function has($id)
    {
        return $this->container->has($id);
    }

    /**
     * Gets a service by id.
     *
     * @param string $id The service id
     * @return object The service
     */
    public function get($id)
    {
        return $this->container->get($id);
    }
}
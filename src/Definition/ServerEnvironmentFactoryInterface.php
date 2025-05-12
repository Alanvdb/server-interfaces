<?php

namespace AlanVdb\Server\Definition;

interface ServerEnvironmentFactoryInterface
{
    /**
     * Create a new ServerEnvironment instance
     *
     * @param array $dotenvParams Array of environment variables (key-value pairs)
     * @return ServerEnvironmentInterface The created environment instance
     */
    public function create(array $dotenvParams): ServerEnvironmentInterface;
}

<?php

namespace AlanVdb\Server\Definition;

interface ServerEnvironmentInterface
{
    /**
     * Get an environment variable value
     *
     * @param string $key The environment variable name
     * @return string The environment variable value
     * @throws \AlanVdb\Server\Exception\EnvironmentVariableNotFound If variable doesn't exist
     */
    public function get(string $key): string;
    
    /**
     * Check if environment variable exists
     *
     * @param string $key The environment variable name
     * @return bool True if variable exists, false otherwise
     */
    public function has(string $key): bool;
}

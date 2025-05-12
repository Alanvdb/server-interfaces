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
     * Set an environment variable
     *
     * @param string $key The environment variable name
     * @param string $value The environment variable value
     * @throws \AlanVdb\Server\Exception\InvalidServerEnvironmentParamProvided If parameters are invalid
     */
    public function set(string $key, string $value): void;
    
    /**
     * Check if environment variable exists
     *
     * @param string $key The environment variable name
     * @return bool True if variable exists, false otherwise
     */
    public function has(string $key): bool;
}

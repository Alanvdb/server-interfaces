<?php

namespace AlanVdb\Server\Exception;

use AlanVdb\Server\Definition\ServerEnvironmentExceptionInterface;
use RuntimeException;

/**
 * Exception thrown when an environment variable is not found
 */
class EnvironmentVariableNotFound
    extends RuntimeException
    implements ServerEnvironmentExceptionInterface
{}

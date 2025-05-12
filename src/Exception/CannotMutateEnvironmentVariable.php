<?php

namespace AlanVdb\Server\Exception;

use AlanVdb\Server\Definition\ServerEnvironmentExceptionInterface;
use RuntimeException;

/**
 * Exception thrown when an environment variable is not found
 */
class CannotMutateEnvironmentVariable
    extends RuntimeException
    implements ServerEnvironmentExceptionInterface
{}

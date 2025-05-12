<?php

namespace AlanVdb\Server\Exception;

use AlanVdb\Server\Definition\ServerEnvironmentExceptionInterface;
use InvalidArgumentException;

/**
 * Exception thrown when invalid parameters are provided for environment configuration
 */
class InvalidServerEnvironmentParamProvided extends InvalidArgumentException implements ServerEnvironmentExceptionInterface
{}

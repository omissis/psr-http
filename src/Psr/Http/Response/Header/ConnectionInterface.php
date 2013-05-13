<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Connection header
 * Options that are desired for the connection
 *
 * Example: "Connection: close"
 */
interface ConnectionInterface extends HeaderInterface
{
}

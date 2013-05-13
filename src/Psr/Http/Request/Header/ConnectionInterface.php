<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Connection header
 * What type of connection the user-agent would prefer
 *
 * Example: "Connection: keep-alive"
 */
interface ConnectionInterface extends HeaderInterface
{
}

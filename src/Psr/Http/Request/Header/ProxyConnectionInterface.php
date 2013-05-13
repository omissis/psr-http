<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Proxy-Connection header
 * Implemented as a misunderstanding of the HTTP specifications.
 * Common because of mistakes in implementations of early HTTP versions.
 * Has exactly the same functionality as standard Connection header.
 *
 * Example: "Proxy-Connection: keep-alive"
 */
interface ProxyConnectionInterface extends HeaderInterface
{
}

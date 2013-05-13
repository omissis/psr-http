<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Vary header
 * Tells downstream proxies how to match future request headers to decide whether the cached response can be used rather than requesting a fresh one from the origin server.
 *
 * Example: "Vary: *"
 */
interface VaryInterface extends HeaderInterface
{
}

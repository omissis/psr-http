<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for If-Modified-Since header
 * Allows a 304 Not Modified to be returned if content is unchanged
 *
 * Example: "If-Modified-Since: Sat, 29 Oct 1994 19:43:31 GMT"
 */
interface IfModifiedSinceInterface extends HeaderInterface
{
}

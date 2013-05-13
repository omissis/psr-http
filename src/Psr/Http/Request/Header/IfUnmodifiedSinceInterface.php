<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for If-Unmodified-Since header
 * Only send the response if the entity has not been modified since a specific time.
 *
 * Example: "If-Unmodified-Since: Sat, 29 Oct 1994 19:43:31 GMT"
 */
interface IfUnmodifiedSinceInterface extends HeaderInterface
{
}

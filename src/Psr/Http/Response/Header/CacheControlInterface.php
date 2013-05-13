<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Cache-Control header
 * Tells all caching mechanisms from server to client whether they may cache this object.
 * It is measured in seconds
 *
 * Example: "Cache-Control: max-age=3600"
 */
interface CacheControlInterface extends HeaderInterface
{
}

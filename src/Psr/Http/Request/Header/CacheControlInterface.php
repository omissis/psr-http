<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Cache-Control header
 * Used to specify directives that MUST be obeyed by all caching mechanisms along the request/response chain
 *
 * Example: "Cache-Control: no-cache"
 */
interface CacheControlInterface extends HeaderInterface
{
}

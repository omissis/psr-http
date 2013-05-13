<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Last-Modified header
 * The last modified date for the requested object, in RFC 2822 format
 *
 * Example: "Last-Modified: Tue, 15 Nov 1994 12:45:26 GMT"
 */
interface LastModifiedInterface extends HeaderInterface
{
}

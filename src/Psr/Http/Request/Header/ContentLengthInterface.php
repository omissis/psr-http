<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-Length header
 * The length of the request body in octets (8-bit bytes)
 *
 * Example: "Content-Length: 348"
 */
interface ContentLengthInterface extends HeaderInterface
{
}

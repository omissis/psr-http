<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-MD5 header
 * A Base64-encoded binary MD5 sum of the content of the response
 *
 * Example: "Content-MD5: Q2hlY2sgSW50ZWdyaXR5IQ=="
 */
interface ContentMD5Interface extends HeaderInterface
{
}

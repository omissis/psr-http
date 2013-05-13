<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-Encoding header
 * The type of encoding used on the data.
 *
 * Example: "Content-Encoding: gzip"
 */
interface ContentEncodingInterface extends HeaderInterface
{
}

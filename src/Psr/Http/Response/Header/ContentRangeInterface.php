<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-Range header
 * Where in a full body message this partial message belongs
 *
 * Example: "Content-Range: bytes 21010-47021/47022"
 */
interface ContentRangeInterface extends HeaderInterface
{
}

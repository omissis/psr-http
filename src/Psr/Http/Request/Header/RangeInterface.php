<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Range header
 * Request only part of an entity.
 * Bytes are numbered from 0.
 *
 * Example: "Range: bytes=500-999"
 */
interface RangeInterface extends HeaderInterface
{
}

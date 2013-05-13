<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Trailer header
 * The Trailer general field value indicates that the given set of header fields is present in the trailer of a message encoded with chunked transfer-coding.
 *
 * Example: "Trailer: Max-Forwards"
 */
interface TrailerInterface extends HeaderInterface
{
}

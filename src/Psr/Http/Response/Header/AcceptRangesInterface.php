<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Accept-Ranges header
 * What partial content range types this server supports
 *
 * Example: "Accept-Ranges: bytes"
 */
interface AcceptRangesInterface extends HeaderInterface
{
}

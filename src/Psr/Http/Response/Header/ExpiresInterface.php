<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Expires header
 * Gives the date/time after which the response is considered stale
 *
 * Example: "Expires: Thu, 01 Dec 1994 16:00:00 GMT"
 */
interface ExpiresInterface extends HeaderInterface
{
}

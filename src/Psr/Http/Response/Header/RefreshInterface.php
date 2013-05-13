<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Refresh header
 * Used in redirection, or when a new resource has been created.
 * This refresh redirects after 5 seconds.
 * This is a proprietary, non-standard header extension introduced by Netscape and supported by most web browsers.
 *
 * Example: "Refresh: 5; url=http://www.w3.org/pub/WWW/People.html"
 */
interface RefreshInterface extends HeaderInterface
{
}

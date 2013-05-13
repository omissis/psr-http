<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Location header
 * Used in redirection, or when a new resource has been created.
 *
 * Example: "Location: http://www.w3.org/pub/WWW/People.html"
 */
interface LocationInterface extends HeaderInterface
{
}

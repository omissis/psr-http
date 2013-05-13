<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for If-None-Match header
 * Allows a 304 Not Modified to be returned if content is unchanged.
 *
 * Example: "If-None-Match: "737060cd8c284d8af7ad3082f209582d""
 */
interface IfNoneMatchInterface extends HeaderInterface
{
}

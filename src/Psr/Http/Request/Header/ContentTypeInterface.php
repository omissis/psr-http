<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-Type header
 * The MIME type of the body of the request (used with POST and PUT requests)
 *
 * Example: "Content-Type: application/x-www-form-urlencoded"
 */
interface ContentTypeInterface extends HeaderInterface
{
}

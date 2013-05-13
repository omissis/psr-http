<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Allow header
 * Valid actions for a specified resource.
 * To be used for a 405 Method not allowed
 *
 * Example: "Allow: GET, HEAD"
 */
interface AllowInterface extends HeaderInterface
{
}

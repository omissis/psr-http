<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Link header
 * Used to express a typed relationship with another resource, where the relation type is defined by RFC 5988
 *
 * Example: "Link: </feed>; rel="alternate""
 */
interface LinkInterface extends HeaderInterface
{
}

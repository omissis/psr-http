<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Origin header
 * Initiates a request for cross-origin resource sharing (asks server for an 'Access-Control-Allow-Origin' response header) .
 *
 * Example: "Origin: http://www.example-social-network.com"
 */
interface OriginInterface extends HeaderInterface
{
}

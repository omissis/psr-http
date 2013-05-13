<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Forwarded-For header
 * a de facto standard for identifying the originating IP address of a client connecting to a web server through an HTTP proxy or load balancer
 *
 * Example: "X-Forwarded-For: client1, proxy1, proxy2, X-Forwarded-For: 129.78.138.66, 129.78.64.103"
 */
interface XForwardedForInterface extends HeaderInterface
{
}

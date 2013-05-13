<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Content-Security-Policy header
 * Content Security Policy definition.
 *
 * Example: "X-WebKit-CSP: default-src 'self'"
 */
interface XContentSecurityPolicyInterface extends HeaderInterface
{
}

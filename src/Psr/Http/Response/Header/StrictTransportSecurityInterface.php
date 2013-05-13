<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Strict-Transport-Security header
 * A HSTS Policy informing the HTTP client how long to cache the HTTPS only policy and whether this applies to subdomains.
 *
 * Example: "Strict-Transport-Security: max-age=16070400; includeSubDomains"
 */
interface StrictTransportSecurityInterface extends HeaderInterface
{
}

<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Proxy-Authenticate header
 * Request authentication to access the proxy.
 *
 * Example: "Proxy-Authenticate: Basic"
 */
interface ProxyAuthenticateInterface extends HeaderInterface
{
}

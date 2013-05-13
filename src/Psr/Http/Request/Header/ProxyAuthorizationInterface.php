<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Proxy-Authorization header
 * Authorization credentials for connecting to a proxy.
 *
 * Example: "Proxy-Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
 */
interface ProxyAuthorizationInterface extends HeaderInterface
{
}

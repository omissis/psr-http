<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Host header
 * The domain name of the server (for virtual hosting), and the TCP port number on which the server is listening.
 * The port number may be omitted if the port is the standard port for the service requested.
 * Mandatory since HTTP/1.1.
 * Although domain name are specified as case-insensitive, it is not specified whether the contents of the Host field should be interpreted in a case-insensitive manner and in practice some implementations of virtual hosting interpret the contents of the Host field in a case-sensitive manner.
 *
 * Example: "Host: en.wikipedia.org:80, Host: en.wikipedia.org"
 */
interface HostInterface extends HeaderInterface
{
}

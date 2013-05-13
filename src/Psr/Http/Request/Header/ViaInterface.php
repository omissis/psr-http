<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Via header
 * Informs the server of proxies through which the request was sent.
 *
 * Example: "Via: 1.0 fred, 1.1 example.com (Apache/1.1)"
 */
interface ViaInterface extends HeaderInterface
{
}

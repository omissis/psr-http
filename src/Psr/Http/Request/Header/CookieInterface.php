<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Cookie header
 * an HTTP cookie previously sent by the server with Set-Cookie (below)
 *
 * Example: "Cookie: $Version=1; Skin=new;"
 */
interface CookieInterface extends HeaderInterface
{
}

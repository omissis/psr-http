<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Set-Cookie header
 * An HTTP cookie
 *
 * Example: "Set-Cookie: UserID=JohnDoe; Max-Age=3600; Version=1"
 */
interface SetCookieInterface extends HeaderInterface
{
}

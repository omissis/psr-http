<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for WWW-Authenticate header
 * Indicates the authentication scheme that should be used to access the requested entity.
 *
 * Example: "WWW-Authenticate: Basic"
 */
interface WWWAuthenticateInterface extends HeaderInterface
{
}

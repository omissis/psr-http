<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Access-Control-Allow-Origin header
 * Specifying which web sites can participate in cross-origin resource sharing
 *
 * Example: "Access-Control-Allow-Origin: *"
 */
interface AccessControlAllowOriginInterface extends HeaderInterface
{
}

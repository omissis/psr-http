<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Frame-Options header
 * Clickjacking protection: "deny" - no rendering within a frame, "sameorigin" - no rendering if origin mismatch
 *
 * Example: "X-Frame-Options: deny"
 */
interface XFrameOptionsInterface extends HeaderInterface
{
}

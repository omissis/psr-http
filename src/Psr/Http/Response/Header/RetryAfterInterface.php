<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Retry-After header
 * If an entity is temporarily unavailable, this instructs the client to try again after a specified period of time (seconds).
 *
 * Example: "Retry-After: 120"
 */
interface RetryAfterInterface extends HeaderInterface
{
}

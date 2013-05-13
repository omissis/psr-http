<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Requested-With header
 * mainly used to identify Ajax requests.
 * Most JavaScript frameworks send this header with value of XMLHttpRequest
 *
 * Example: "X-Requested-With: XMLHttpRequest"
 */
interface XRequestedWithInterface extends HeaderInterface
{
}

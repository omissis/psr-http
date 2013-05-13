<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-XSS-Protection header
 * Cross-site scripting (XSS) filter
 *
 * Example: "X-XSS-Protection: 1; mode=block"
 */
interface XXSSProtectionInterface extends HeaderInterface
{
}

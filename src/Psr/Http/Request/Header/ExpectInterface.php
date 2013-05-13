<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Expect header
 * Indicates that particular server behaviors are required by the client
 *
 * Example: "Expect: 100-continue"
 */
interface ExpectInterface extends HeaderInterface
{
}

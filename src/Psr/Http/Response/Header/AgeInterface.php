<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Age header
 * The age the object has been in a proxy cache in seconds
 *
 * Example: "Age: 12"
 */
interface AgeInterface extends HeaderInterface
{
}

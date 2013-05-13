<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Pragma header
 * Implementation-specific headers that may have various effects anywhere along the request-response chain.
 *
 * Example: "Pragma: no-cache"
 */
interface PragmaInterface extends HeaderInterface
{
}

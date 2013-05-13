<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for ETag header
 * An identifier for a specific version of a resource, often a message digest
 *
 * Example: "ETag: "737060cd8c284d8af7ad3082f209582d""
 */
interface ETagInterface extends HeaderInterface
{
}

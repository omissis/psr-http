<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Content-Disposition header
 * An opportunity to raise a "File Download" dialogue box for a known MIME type with binary format or suggest a filename for dynamic content.
 * Quotes are necessary with special characters.
 *
 * Example: "Content-Disposition: attachment; filename="fname.ext""
 */
interface ContentDispositionInterface extends HeaderInterface
{
}

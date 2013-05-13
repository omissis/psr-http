<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Content-Type-Options header
 * The only defined value, "nosniff", prevents Internet Explorer from MIME-sniffing a response away from the declared content-type.
 * This also applies to Google Chrome, when downloading extensions.
 *
 * Example: "X-Content-Type-Options: nosniff"
 */
interface XContentTypeOptionsInterface extends HeaderInterface
{
}

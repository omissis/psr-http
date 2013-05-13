<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for If-Range header
 * If the entity is unchanged, send me the part(s) that I am missing; otherwise, send me the entire new entity
 *
 * Example: "If-Range: "737060cd8c284d8af7ad3082f209582d""
 */
interface IfRangeInterface extends HeaderInterface
{
}

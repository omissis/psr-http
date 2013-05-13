<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Warning header
 * A general warning about possible problems with the entity body.
 *
 * Example: "Warning: 199 Miscellaneous warning"
 */
interface WarningInterface extends HeaderInterface
{
}

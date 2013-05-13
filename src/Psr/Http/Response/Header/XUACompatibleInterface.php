<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-UA-Compatible header
 * Recommends the preferred rendering engine (often a backward-compatibility mode) to use to display the content.
 * Also used to activate Chrome Frame in Internet Explorer.
 *
 * Example: "X-UA-Compatible: IE=EmulateIE7, X-UA-Compatible: IE=edge, X-UA-Compatible: Chrome=1"
 */
interface XUACompatibleInterface extends HeaderInterface
{
}

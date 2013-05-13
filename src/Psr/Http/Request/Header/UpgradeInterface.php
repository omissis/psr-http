<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Upgrade header
 * Ask the server to upgrade to another protocol.
 *
 * Example: "Upgrade: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11"
 */
interface UpgradeInterface extends HeaderInterface
{
}

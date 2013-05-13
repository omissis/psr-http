<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Max-Forwards header
 * Limit the number of times the message can be forwarded through proxies or gateways.
 *
 * Example: "Max-Forwards: 10"
 */
interface MaxForwardsInterface extends HeaderInterface
{
}

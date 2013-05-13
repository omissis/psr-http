<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Front-End-Https header
 * Non-standard header used by Microsoft applications and load-balancers
 *
 * Example: "Front-End-Https: on"
 */
interface FrontEndHttpsInterface extends HeaderInterface
{
}

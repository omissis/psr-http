<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Powered-By header
 * specifies the technology (e.g.
 * ASP.NET, PHP, JBoss) supporting the web application (version details are often in X-Runtime, X-Version, or X-AspNet-Version)
 *
 * Example: "X-Powered-By: PHP/5.4.0"
 */
interface XPoweredByInterface extends HeaderInterface
{
}

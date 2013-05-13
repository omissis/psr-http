<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Forwarded-Proto header
 * a de facto standard for identifying the originating protocol of an HTTP request, since a reverse proxy (load balancer) may communicate with a web server using HTTP even if the request to the reverse proxy is HTTPS
 *
 * Example: "X-Forwarded-Proto: https"
 */
interface XForwardedProtoInterface extends HeaderInterface
{
}

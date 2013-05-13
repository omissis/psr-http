<?php

namespace Psr\Http;

/**
 * A Request objects generator.
 */
interface RequestFactoryInterface
{
    /**
     * Returns an instance of RequestInterface
     *
     * @param string $method          The Http method.
     * @param string $url             URL.
     * @param string $protocolVersion The HTTP protocol version.
     *
     * @return RequestInterface
     */
    public static function createRequest($method, $url, $protocolVersion = '1.1');
}

<?php

namespace Psr\Http;

/**
 * A Response objects generator.
 */
interface ResponseFactoryInterface
{
    /**
     * Returns an instance of ResponseInterface
     *
     * @param string $status   The status of the response.
     * @param mixed|null $body The body of the response.
     * @param array $headers   The headers of the response.
     *
     * @return ResponseInterface
     */
    public static function createResponse($status, $body = null, array $headers = array());
}

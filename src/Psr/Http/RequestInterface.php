<?php

namespace Psr\Http;

use Psr\Http\Exception\InvalidArgumentException;

/**
 * A request message from a client to a server.
 */
interface RequestInterface extends MessageInterface
{
    /**
     * Gets the method.
     *
     * @return string Method.
     */
    public function getMethod();

    /**
     * Sets the method.
     *
     * @param string $method Method.
     *
     * @return self Reference to the request.
     */
    public function setMethod($method);

    /**
     * Gets the absolute URL.
     *
     * @return string URL.
     */
    public function getUrl();

    /**
     * Sets the absolute URL.
     *
     * @param string $url URL.
     *
     * @return self Reference to the request.
     *
     * @throws InvalidArgumentException If the URL is invalid.
     */
    public function setUrl($url);
}

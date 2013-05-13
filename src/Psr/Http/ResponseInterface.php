<?php

namespace Psr\Http;

use Psr\Http\Exception\InvalidArgumentException;

/**
 * A request message from a server to a client.
 */
interface ResponseInterface extends MessageInterface
{
    /**
     * Gets the response status code.
     *
     * @return integer Status code.
     */
    public function getStatusCode();

    /**
     * Sets the response status code.
     *
     * @param integer $statusCode Status code.
     *
     * @return self Reference to the response.
     *
     * @throws InvalidArgumentException When the status code is not valid.
     */
    public function setStatusCode($statusCode);

    /**
     * Gets the response reason phrase.
     *
     * If it has not been explicitly set using `setReasonPhrase()` it SHOULD
     * return the RFC 2616 recommended reason phrase.
     *
     * @return string|null Reason phrase, or null if unknown.
     */
    public function getReasonPhrase();

    /**
     * Sets the response reason phrase.
     *
     * @param string $reasonPhrase Reason phrase.
     *
     * @return self Reference to the response.
     */
    public function setReasonPhrase($reasonPhrase);
}

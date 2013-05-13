<?php

namespace Psr\Http\Message;

/**
 * Interface for a Header object,
 *
 * This interface can be implemented directly
 * or the client can rely on more specific Request or Response Header Interfaces.
 */
interface HeaderInterface
{
    /**
     * Populate the object value from the given string
     *
     * @param string $headerLine
     */
    public function fromString($headerLine);

    /**
     * Return the object value as a string
     *
     * @return string
     */
    public function toString();

    /**
     * Return the header's name
     *
     * @return string
     */
    public function getName();

    /**
     * Return the header's value
     *
     * @return mixed|null
     */
    public function getValue();
}

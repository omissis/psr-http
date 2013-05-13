<?php

namespace Psr\Http\Message;

/**
 * Interface for a Header object holding multiple values.
 */
interface MultipleHeaderInterface extends HeaderInterface
{
    /**
     * Return the header's value
     *
     * @return array
     */
    public function getValue();
}

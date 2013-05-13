<?php

namespace Psr\Http\Message;

interface HeaderFactoryInterface
{
    /**
     * Returns an instance of HeaderInterface
     *
     * @param string $line The actual header line.
     *
     * @return HeaderInterface
     */
    public static function createHeader($line);

    /**
     * Returns an instance of MultipleHeaderInterface
     *
     * @param string $line The actual header line.
     *
     * @return MultipleHeaderInterface
     */
    public static function createMultipleHeader($line);
}

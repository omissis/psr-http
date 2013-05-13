<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Referer header
 * This is the address of the previous web page from which a link to the currently requested page was followed.
 * (The word “referrer” is misspelled in the RFC as well as in most implementations.)
 *
 * Example: "Referer: http://en.wikipedia.org/wiki/Main_Page"
 */
interface RefererInterface extends HeaderInterface
{
}

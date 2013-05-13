<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for DNT header
 * Requests a web application to disable their tracking of a user.
 * This is Mozilla's version of the X-Do-Not-Track header (since Firefox 4.0 Beta 11).
 * Safari and IE9 also have support for this header.
 * On March 7, 2011, a draft proposal was submitted to IETF.
 * The W3C Tracking Protection Working Group is producing a specification.
 *
 * Example: "DNT: 1 (Do Not Track Enabled), DNT: 0 (Do Not Track Disabled)"
 */
interface DNTInterface extends HeaderInterface
{
}

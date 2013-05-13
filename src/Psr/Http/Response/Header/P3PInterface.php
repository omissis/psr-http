<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for P3P header
 * This header is supposed to set P3P policy, in the form of P3P:CP="your_compact_policy".
 * However, P3P did not take off, most browsers have never fully implemented it, a lot of websites set this header with fake policy text, that was enough to fool browsers the existence of P3P policy and grant permissions for third party cookies.
 *
 * Example: "P3P: CP="This is not a P3P policy! See http://www.google.com/support/accounts/bin/answer.py?hl=en&answer=151657 for more info.""
 */
interface P3PInterface extends HeaderInterface
{
}

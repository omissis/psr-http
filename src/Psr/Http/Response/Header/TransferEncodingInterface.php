<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for Transfer-Encoding header
 * The form of encoding used to safely transfer the entity to the user.
 * Currently defined methods are: chunked, compress, deflate, gzip, identity.
 *
 * Example: "Transfer-Encoding: chunked"
 */
interface TransferEncodingInterface extends HeaderInterface
{
}

<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for If-Match header
 * Only perform the action if the client supplied entity matches the same entity on the server.
 * This is mainly for methods like PUT to only update a resource if it has not been modified since the user last updated it.
 *
 * Example: "If-Match: "737060cd8c284d8af7ad3082f209582d""
 */
interface IfMatchInterface extends HeaderInterface
{
}

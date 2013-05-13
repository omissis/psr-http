<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-Wap-Profile header
 * Links to an XML file on the Internet with a full description and details about the device currently connecting.
 * In the example to the right is an XML file for an AT&T Samsung Galaxy S2.
 *
 * Example: "x-wap-profile: http://wap.samsungmobile.com/uaprof/SGH-I777.xml"
 */
interface XWapProfileInterface extends HeaderInterface
{
}

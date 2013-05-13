<?php

namespace Psr\Http\Message\Header;

use Psr\Http\HeaderInterface;

/**
 * Interface for X-ATT-DeviceId header
 * Allows easier parsing of the MakeModel/Firmware that is usually found in the User-Agent String of AT&T Devices
 *
 * Example: "x-att-deviceid: MakeModel/Firmware"
 */
interface XATTDeviceIdInterface extends HeaderInterface
{
}

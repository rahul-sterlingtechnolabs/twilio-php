<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Voice
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Voice\V1;

use Twilio\Options;
use Twilio\Values;

abstract class IpRecordOptions
{
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     * @param int $cidrPrefixLength An integer representing the length of the [CIDR](https://tools.ietf.org/html/rfc4632) prefix to use with this IP address. By default the entire IP address is used, which for IPv4 is value 32.
     * @return CreateIpRecordOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        int $cidrPrefixLength = Values::NONE

    ): CreateIpRecordOptions
    {
        return new CreateIpRecordOptions(
            $friendlyName,
            $cidrPrefixLength
        );
    }




    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     * @return UpdateIpRecordOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE

    ): UpdateIpRecordOptions
    {
        return new UpdateIpRecordOptions(
            $friendlyName
        );
    }

}

class CreateIpRecordOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     * @param int $cidrPrefixLength An integer representing the length of the [CIDR](https://tools.ietf.org/html/rfc4632) prefix to use with this IP address. By default the entire IP address is used, which for IPv4 is value 32.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        int $cidrPrefixLength = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
    }

    /**
     * A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * An integer representing the length of the [CIDR](https://tools.ietf.org/html/rfc4632) prefix to use with this IP address. By default the entire IP address is used, which for IPv4 is value 32.
     *
     * @param int $cidrPrefixLength An integer representing the length of the [CIDR](https://tools.ietf.org/html/rfc4632) prefix to use with this IP address. By default the entire IP address is used, which for IPv4 is value 32.
     * @return $this Fluent Builder
     */
    public function setCidrPrefixLength(int $cidrPrefixLength): self
    {
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Voice.V1.CreateIpRecordOptions ' . $options . ']';
    }
}




class UpdateIpRecordOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Voice.V1.UpdateIpRecordOptions ' . $options . ']';
    }
}


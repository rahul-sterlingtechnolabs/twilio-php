<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\DeployedDevices\Fleet;

use Twilio\Options;
use Twilio\Values;

abstract class KeyOptions
{
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     * @return CreateKeyOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        string $deviceSid = Values::NONE

    ): CreateKeyOptions
    {
        return new CreateKeyOptions(
            $friendlyName,
            $deviceSid
        );
    }



    /**
     * @param string $deviceSid Filters the resulting list of Keys by a unique string identifier of an authenticated Device.
     * @return ReadKeyOptions Options builder
     */
    public static function read(
        
        string $deviceSid = Values::NONE

    ): ReadKeyOptions
    {
        return new ReadKeyOptions(
            $deviceSid
        );
    }

    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     * @return UpdateKeyOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $deviceSid = Values::NONE

    ): UpdateKeyOptions
    {
        return new UpdateKeyOptions(
            $friendlyName,
            $deviceSid
        );
    }

}

class CreateKeyOptions extends Options
    {
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $deviceSid = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     *
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self
    {
        $this->options['deviceSid'] = $deviceSid;
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
        return '[Twilio.Preview.DeployedDevices.CreateKeyOptions ' . $options . ']';
    }
}



class ReadKeyOptions extends Options
    {
    /**
     * @param string $deviceSid Filters the resulting list of Keys by a unique string identifier of an authenticated Device.
     */
    public function __construct(
        
        string $deviceSid = Values::NONE

    )
    {
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Filters the resulting list of Keys by a unique string identifier of an authenticated Device.
     *
     * @param string $deviceSid Filters the resulting list of Keys by a unique string identifier of an authenticated Device.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self
    {
        $this->options['deviceSid'] = $deviceSid;
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
        return '[Twilio.Preview.DeployedDevices.ReadKeyOptions ' . $options . ']';
    }
}

class UpdateKeyOptions extends Options
    {
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $deviceSid = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Key credential, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     *
     * @param string $deviceSid Provides the unique string identifier of an existing Device to become authenticated with this Key credential.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self
    {
        $this->options['deviceSid'] = $deviceSid;
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
        return '[Twilio.Preview.DeployedDevices.UpdateKeyOptions ' . $options . ']';
    }
}


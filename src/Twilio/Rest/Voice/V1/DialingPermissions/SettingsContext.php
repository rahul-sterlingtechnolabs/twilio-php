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


namespace Twilio\Rest\Voice\V1\DialingPermissions;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class SettingsContext extends InstanceContext
    {
    /**
     * Initialize the SettingsContext
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/Settings';
    }

    /**
     * Fetch the SettingsInstance
     *
     * @return SettingsInstance Fetched SettingsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SettingsInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new SettingsInstance(
            $this->version,
            $payload,
        );
    }


    /**
     * Update the SettingsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SettingsInstance Updated SettingsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SettingsInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'DialingPermissionsInheritance' =>
                Serialize::booleanToString($options['dialingPermissionsInheritance']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SettingsInstance(
            $this->version,
            $payload,
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Voice.V1.SettingsContext ' . \implode(' ', $context) . ']';
    }
}

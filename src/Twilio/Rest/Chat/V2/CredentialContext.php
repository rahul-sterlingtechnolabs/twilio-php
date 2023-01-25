<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Chat\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class CredentialContext extends InstanceContext
    {
    /**
     * Initialize the CredentialContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the Credential resource to delete.
     */
    public function __construct(
        Version $version,
        $sid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/Credentials/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the CredentialInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the CredentialInstance
     *
     * @return CredentialInstance Fetched CredentialInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CredentialInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new CredentialInstance(
            $this->version,
            $payload,
            $this->solution['sid'],
        );
    }


    /**
     * Update the CredentialInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CredentialInstance Updated CredentialInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): CredentialInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $options['friendlyName'],
            'Certificate' =>
                $options['certificate'],
            'PrivateKey' =>
                $options['privateKey'],
            'Sandbox' =>
                Serialize::booleanToString($options['sandbox']),
            'ApiKey' =>
                $options['apiKey'],
            'Secret' =>
                $options['secret'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new CredentialInstance(
            $this->version,
            $payload,
            $this->solution['sid'],
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
        return '[Twilio.Chat.V2.CredentialContext ' . \implode(' ', $context) . ']';
    }
}

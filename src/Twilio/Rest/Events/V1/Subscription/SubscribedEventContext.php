<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Events\V1\Subscription;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class SubscribedEventContext extends InstanceContext
    {
    /**
     * Initialize the SubscribedEventContext
     *
     * @param Version $version Version that contains the resource
     * @param string $subscriptionSid The unique SID identifier of the Subscription.
     * @param string $type Type of event being subscribed to.
     */
    public function __construct(
        Version $version,
        $subscriptionSid,
        $type
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'subscriptionSid' =>
            $subscriptionSid,
        'type' =>
            $type,
        ];

        $this->uri = '/Subscriptions/' . \rawurlencode($subscriptionSid)
        .'/SubscribedEvents/' . \rawurlencode($type)
        .'';
    }

    /**
     * Delete the SubscribedEventInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the SubscribedEventInstance
     *
     * @return SubscribedEventInstance Fetched SubscribedEventInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SubscribedEventInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new SubscribedEventInstance(
            $this->version,
            $payload,
            $this->solution['subscriptionSid'],
            $this->solution['type'],
        );
    }


    /**
     * Update the SubscribedEventInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SubscribedEventInstance Updated SubscribedEventInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SubscribedEventInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'SchemaVersion' =>
                $options['schemaVersion'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SubscribedEventInstance(
            $this->version,
            $payload,
            $this->solution['subscriptionSid'],
            $this->solution['type'],
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
        return '[Twilio.Events.V1.SubscribedEventContext ' . \implode(' ', $context) . ']';
    }
}

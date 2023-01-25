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


namespace Twilio\Rest\Events\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Events\V1\Subscription\SubscribedEventList;


/**
 * @property string $accountSid
 * @property string $sid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $description
 * @property string $sinkSid
 * @property string $url
 * @property array $links
 */
class SubscriptionInstance extends InstanceResource
{
    protected $_subscribedEvents;

    /**
     * Initialize the SubscriptionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A 34 character string that uniquely identifies this Subscription.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'description' => Values::array_get($payload, 'description'),
            'sinkSid' => Values::array_get($payload, 'sink_sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SubscriptionContext Context for this SubscriptionInstance
     */
    protected function proxy(): SubscriptionContext
    {
        if (!$this->context) {
            $this->context = new SubscriptionContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the SubscriptionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the SubscriptionInstance
     *
     * @return SubscriptionInstance Fetched SubscriptionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SubscriptionInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the SubscriptionInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SubscriptionInstance Updated SubscriptionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SubscriptionInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the subscribedEvents
     */
    protected function getSubscribedEvents(): SubscribedEventList
    {
        return $this->proxy()->subscribedEvents;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Events.V1.SubscriptionInstance ' . \implode(' ', $context) . ']';
    }
}


<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Api\V2010\Account\Recording;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property string $apiVersion
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $duration
 * @property string $price
 * @property string $priceUnit
 * @property string $recordingSid
 * @property string $sid
 * @property string $status
 * @property string $transcriptionText
 * @property string $type
 * @property string $uri
 */
class TranscriptionInstance extends InstanceResource
{
    /**
     * Initialize the TranscriptionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the Transcription resources to delete.
     * @param string $recordingSid The SID of the [Recording](https://www.twilio.com/docs/voice/api/recording) that created the transcription to delete.
     * @param string $sid The Twilio-provided string that uniquely identifies the Transcription resource to delete.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $recordingSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'duration' => Values::array_get($payload, 'duration'),
            'price' => Values::array_get($payload, 'price'),
            'priceUnit' => Values::array_get($payload, 'price_unit'),
            'recordingSid' => Values::array_get($payload, 'recording_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'status' => Values::array_get($payload, 'status'),
            'transcriptionText' => Values::array_get($payload, 'transcription_text'),
            'type' => Values::array_get($payload, 'type'),
            'uri' => Values::array_get($payload, 'uri'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'recordingSid' => $recordingSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TranscriptionContext Context for this TranscriptionInstance
     */
    protected function proxy(): TranscriptionContext
    {
        if (!$this->context) {
            $this->context = new TranscriptionContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['recordingSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the TranscriptionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the TranscriptionInstance
     *
     * @return TranscriptionInstance Fetched TranscriptionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TranscriptionInstance
    {

        return $this->proxy()->fetch();
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
        return '[Twilio.Api.V2010.TranscriptionInstance ' . \implode(' ', $context) . ']';
    }
}


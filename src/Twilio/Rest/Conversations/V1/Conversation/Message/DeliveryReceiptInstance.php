<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Conversations\V1\Conversation\Message;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property string $conversationSid
 * @property string $sid
 * @property string $messageSid
 * @property string $channelMessageSid
 * @property string $participantSid
 * @property string $status
 * @property int $errorCode
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class DeliveryReceiptInstance extends InstanceResource
{
    /**
     * Initialize the DeliveryReceiptInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $conversationSid The unique ID of the [Conversation](https://www.twilio.com/docs/conversations/api/conversation-resource) for this message.
     * @param string $messageSid The SID of the message within a [Conversation](https://www.twilio.com/docs/conversations/api/conversation-resource) the delivery receipt belongs to.
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function __construct(Version $version, array $payload, string $conversationSid, string $messageSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'conversationSid' => Values::array_get($payload, 'conversation_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'messageSid' => Values::array_get($payload, 'message_sid'),
            'channelMessageSid' => Values::array_get($payload, 'channel_message_sid'),
            'participantSid' => Values::array_get($payload, 'participant_sid'),
            'status' => Values::array_get($payload, 'status'),
            'errorCode' => Values::array_get($payload, 'error_code'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['conversationSid' => $conversationSid, 'messageSid' => $messageSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return DeliveryReceiptContext Context for this DeliveryReceiptInstance
     */
    protected function proxy(): DeliveryReceiptContext
    {
        if (!$this->context) {
            $this->context = new DeliveryReceiptContext(
                $this->version,
                $this->solution['conversationSid'],
                $this->solution['messageSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the DeliveryReceiptInstance
     *
     * @return DeliveryReceiptInstance Fetched DeliveryReceiptInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DeliveryReceiptInstance
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
        return '[Twilio.Conversations.V1.DeliveryReceiptInstance ' . \implode(' ', $context) . ']';
    }
}


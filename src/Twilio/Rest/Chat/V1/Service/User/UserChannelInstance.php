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


namespace Twilio\Rest\Chat\V1\Service\User;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $channelSid
 * @property string $memberSid
 * @property string $status
 * @property int $lastConsumedMessageIndex
 * @property int $unreadMessagesCount
 * @property array $links
 */
class UserChannelInstance extends InstanceResource
{
    /**
     * Initialize the UserChannelInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/api/chat/rest/services) to read the resources from.
     * @param string $userSid The SID of the [User](https://www.twilio.com/docs/api/chat/rest/users) to read the User Channel resources from.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $userSid)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'channelSid' => Values::array_get($payload, 'channel_sid'),
            'memberSid' => Values::array_get($payload, 'member_sid'),
            'status' => Values::array_get($payload, 'status'),
            'lastConsumedMessageIndex' => Values::array_get($payload, 'last_consumed_message_index'),
            'unreadMessagesCount' => Values::array_get($payload, 'unread_messages_count'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'userSid' => $userSid, ];
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
        return '[Twilio.Chat.V1.UserChannelInstance]';
    }
}


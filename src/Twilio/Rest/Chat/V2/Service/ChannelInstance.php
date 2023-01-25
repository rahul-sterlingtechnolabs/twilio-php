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


namespace Twilio\Rest\Chat\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Chat\V2\Service\Channel\MemberList;
use Twilio\Rest\Chat\V2\Service\Channel\InviteList;
use Twilio\Rest\Chat\V2\Service\Channel\WebhookList;
use Twilio\Rest\Chat\V2\Service\Channel\MessageList;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $friendlyName
 * @property string $uniqueName
 * @property string $attributes
 * @property string $type
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $createdBy
 * @property int $membersCount
 * @property int $messagesCount
 * @property string $url
 * @property array $links
 */
class ChannelInstance extends InstanceResource
{
    protected $_members;
    protected $_invites;
    protected $_webhooks;
    protected $_messages;

    /**
     * Initialize the ChannelInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/chat/rest/service-resource) to create the Channel resource under.
     * @param string $sid The SID of the Channel resource to delete.  This value can be either the `sid` or the `unique_name` of the Channel resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'attributes' => Values::array_get($payload, 'attributes'),
            'type' => Values::array_get($payload, 'type'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'createdBy' => Values::array_get($payload, 'created_by'),
            'membersCount' => Values::array_get($payload, 'members_count'),
            'messagesCount' => Values::array_get($payload, 'messages_count'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ChannelContext Context for this ChannelInstance
     */
    protected function proxy(): ChannelContext
    {
        if (!$this->context) {
            $this->context = new ChannelContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool
    {

        return $this->proxy()->delete($options);
    }

    /**
     * Fetch the ChannelInstance
     *
     * @return ChannelInstance Fetched ChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ChannelInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the ChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ChannelInstance Updated ChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ChannelInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the members
     */
    protected function getMembers(): MemberList
    {
        return $this->proxy()->members;
    }

    /**
     * Access the invites
     */
    protected function getInvites(): InviteList
    {
        return $this->proxy()->invites;
    }

    /**
     * Access the webhooks
     */
    protected function getWebhooks(): WebhookList
    {
        return $this->proxy()->webhooks;
    }

    /**
     * Access the messages
     */
    protected function getMessages(): MessageList
    {
        return $this->proxy()->messages;
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
        return '[Twilio.Chat.V2.ChannelInstance ' . \implode(' ', $context) . ']';
    }
}


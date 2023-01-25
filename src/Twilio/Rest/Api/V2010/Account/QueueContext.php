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


namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\Queue\MemberList;


/**
 * @property MemberList $members
 * @method \Twilio\Rest\Api\V2010\Account\Queue\MemberContext members(string $callSid)
 */
class QueueContext extends InstanceContext
    {
    protected $_members;

    /**
     * Initialize the QueueContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the Queue resource to delete
     */
    public function __construct(
        Version $version,
        $accountSid,
        $sid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/Queues/' . \rawurlencode($sid)
        .'.json';
    }

    /**
     * Delete the QueueInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the QueueInstance
     *
     * @return QueueInstance Fetched QueueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): QueueInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new QueueInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid'],
        );
    }


    /**
     * Update the QueueInstance
     *
     * @param array|Options $options Optional Arguments
     * @return QueueInstance Updated QueueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): QueueInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $options['friendlyName'],
            'MaxSize' =>
                $options['maxSize'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new QueueInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid'],
        );
    }


    /**
     * Access the members
     */
    protected function getMembers(): MemberList
    {
        if (!$this->_members) {
            $this->_members = new MemberList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid'],
            );
        }

        return $this->_members;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
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
        return '[Twilio.Api.V2010.QueueContext ' . \implode(' ', $context) . ']';
    }
}

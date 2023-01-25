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


namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressList;


/**
 * @property IpAddressList $ipAddresses
 * @method \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressContext ipAddresses(string $sid)
 */
class IpAccessControlListContext extends InstanceContext
    {
    protected $_ipAddresses;

    /**
     * Initialize the IpAccessControlListContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for this resource.
     * @param string $sid A 34 character string that uniquely identifies the resource to delete.
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
        .'/SIP/IpAccessControlLists/' . \rawurlencode($sid)
        .'.json';
    }

    /**
     * Delete the IpAccessControlListInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the IpAccessControlListInstance
     *
     * @return IpAccessControlListInstance Fetched IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): IpAccessControlListInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid'],
        );
    }


    /**
     * Update the IpAccessControlListInstance
     *
     * @param string $friendlyName A human readable descriptive text, up to 255 characters long.
     * @return IpAccessControlListInstance Updated IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $friendlyName): IpAccessControlListInstance
    {

        $data = Values::of([
            'FriendlyName' =>
                $friendlyName,
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid'],
        );
    }


    /**
     * Access the ipAddresses
     */
    protected function getIpAddresses(): IpAddressList
    {
        if (!$this->_ipAddresses) {
            $this->_ipAddresses = new IpAddressList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid'],
            );
        }

        return $this->_ipAddresses;
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
        return '[Twilio.Api.V2010.IpAccessControlListContext ' . \implode(' ', $context) . ']';
    }
}

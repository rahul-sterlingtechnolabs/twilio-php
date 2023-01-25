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
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\Usage\RecordList;
use Twilio\Rest\Api\V2010\Account\Usage\TriggerList;


/**
 * @property RecordList $records
 * @property TriggerList $triggers
 * @method \Twilio\Rest\Api\V2010\Account\Usage\TriggerContext triggers(string $sid)
 */
class UsageList extends ListResource
    {
    protected $_records = null;
    protected $_triggers = null;

    /**
     * Construct the UsageList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the UsageRecord resources to read.
     */
    public function __construct(
        Version $version,
        string $accountSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        
        ];
    }

    /**
     * Access the records
     */
    protected function getRecords(): RecordList
    {
        if (!$this->_records) {
            $this->_records = new RecordList(
                $this->version,
                $this->solution['accountSid']
                
            );
        }
        return $this->_records;
    }

    /**
     * Access the triggers
     */
    protected function getTriggers(): TriggerList
    {
        if (!$this->_triggers) {
            $this->_triggers = new TriggerList(
                $this->version,
                $this->solution['accountSid']
                
            );
        }
        return $this->_triggers;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name)
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
        return '[Twilio.Api.V2010.UsageList]';
    }
}

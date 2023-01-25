<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Studio
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Studio\V2\Flow;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $friendlyName
 * @property array $definition
 * @property string $status
 * @property int $revision
 * @property string $commitMessage
 * @property bool $valid
 * @property array[] $errors
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class FlowRevisionInstance extends InstanceResource
{
    /**
     * Initialize the FlowRevisionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Flow resource to fetch.
     * @param string $revision Specific Revision number or can be `LatestPublished` and `LatestRevision`.
     */
    public function __construct(Version $version, array $payload, string $sid, string $revision = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'definition' => Values::array_get($payload, 'definition'),
            'status' => Values::array_get($payload, 'status'),
            'revision' => Values::array_get($payload, 'revision'),
            'commitMessage' => Values::array_get($payload, 'commit_message'),
            'valid' => Values::array_get($payload, 'valid'),
            'errors' => Values::array_get($payload, 'errors'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['sid' => $sid, 'revision' => $revision ?: $this->properties['revision'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return FlowRevisionContext Context for this FlowRevisionInstance
     */
    protected function proxy(): FlowRevisionContext
    {
        if (!$this->context) {
            $this->context = new FlowRevisionContext(
                $this->version,
                $this->solution['sid'],
                $this->solution['revision']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the FlowRevisionInstance
     *
     * @return FlowRevisionInstance Fetched FlowRevisionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FlowRevisionInstance
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
        return '[Twilio.Studio.V2.FlowRevisionInstance ' . \implode(' ', $context) . ']';
    }
}


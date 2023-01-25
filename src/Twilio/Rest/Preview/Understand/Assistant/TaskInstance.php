<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Preview\Understand\Assistant\Task\SampleList;
use Twilio\Rest\Preview\Understand\Assistant\Task\FieldList;
use Twilio\Rest\Preview\Understand\Assistant\Task\TaskActionsList;
use Twilio\Rest\Preview\Understand\Assistant\Task\TaskStatisticsList;


/**
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $friendlyName
 * @property array $links
 * @property string $assistantSid
 * @property string $sid
 * @property string $uniqueName
 * @property string $actionsUrl
 * @property string $url
 */
class TaskInstance extends InstanceResource
{
    protected $_samples;
    protected $_fields;
    protected $_taskActions;
    protected $_statistics;

    /**
     * Initialize the TaskInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantSid The unique ID of the Assistant.
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function __construct(Version $version, array $payload, string $assistantSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'links' => Values::array_get($payload, 'links'),
            'assistantSid' => Values::array_get($payload, 'assistant_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'actionsUrl' => Values::array_get($payload, 'actions_url'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['assistantSid' => $assistantSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TaskContext Context for this TaskInstance
     */
    protected function proxy(): TaskContext
    {
        if (!$this->context) {
            $this->context = new TaskContext(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the TaskInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the TaskInstance
     *
     * @return TaskInstance Fetched TaskInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TaskInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the TaskInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TaskInstance Updated TaskInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): TaskInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the samples
     */
    protected function getSamples(): SampleList
    {
        return $this->proxy()->samples;
    }

    /**
     * Access the fields
     */
    protected function getFields(): FieldList
    {
        return $this->proxy()->fields;
    }

    /**
     * Access the taskActions
     */
    protected function getTaskActions(): TaskActionsList
    {
        return $this->proxy()->taskActions;
    }

    /**
     * Access the statistics
     */
    protected function getStatistics(): TaskStatisticsList
    {
        return $this->proxy()->statistics;
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
        return '[Twilio.Preview.Understand.TaskInstance ' . \implode(' ', $context) . ']';
    }
}


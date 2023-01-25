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
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Events\V1\Sink\SinkTestList;
use Twilio\Rest\Events\V1\Sink\SinkValidateList;


/**
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $description
 * @property string $sid
 * @property array $sinkConfiguration
 * @property string $sinkType
 * @property string $status
 * @property string $url
 * @property array $links
 */
class SinkInstance extends InstanceResource
{
    protected $_sinkTest;
    protected $_sinkValidate;

    /**
     * Initialize the SinkInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A 34 character string that uniquely identifies this Sink.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'description' => Values::array_get($payload, 'description'),
            'sid' => Values::array_get($payload, 'sid'),
            'sinkConfiguration' => Values::array_get($payload, 'sink_configuration'),
            'sinkType' => Values::array_get($payload, 'sink_type'),
            'status' => Values::array_get($payload, 'status'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SinkContext Context for this SinkInstance
     */
    protected function proxy(): SinkContext
    {
        if (!$this->context) {
            $this->context = new SinkContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the SinkInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the SinkInstance
     *
     * @return SinkInstance Fetched SinkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SinkInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the SinkInstance
     *
     * @param string $description A human readable description for the Sink **This value should not contain PII.**
     * @return SinkInstance Updated SinkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $description): SinkInstance
    {

        return $this->proxy()->update($description);
    }

    /**
     * Access the sinkTest
     */
    protected function getSinkTest(): SinkTestList
    {
        return $this->proxy()->sinkTest;
    }

    /**
     * Access the sinkValidate
     */
    protected function getSinkValidate(): SinkValidateList
    {
        return $this->proxy()->sinkValidate;
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
        return '[Twilio.Events.V1.SinkInstance ' . \implode(' ', $context) . ']';
    }
}


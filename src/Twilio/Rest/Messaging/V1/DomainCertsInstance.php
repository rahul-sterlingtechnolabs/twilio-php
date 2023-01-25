<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Messaging\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $domainSid
 * @property \DateTime $dateUpdated
 * @property \DateTime $dateExpires
 * @property \DateTime $dateCreated
 * @property string $domainName
 * @property string $certificateSid
 * @property string $url
 * @property bool $validated
 */
class DomainCertsInstance extends InstanceResource
{
    /**
     * Initialize the DomainCertsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $domainSid Unique string used to identify the domain that this certificate should be associated with.
     */
    public function __construct(Version $version, array $payload, string $domainSid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'domainSid' => Values::array_get($payload, 'domain_sid'),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'dateExpires' => Deserialize::dateTime(Values::array_get($payload, 'date_expires')),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'domainName' => Values::array_get($payload, 'domain_name'),
            'certificateSid' => Values::array_get($payload, 'certificate_sid'),
            'url' => Values::array_get($payload, 'url'),
            'validated' => Values::array_get($payload, 'validated'),
        ];

        $this->solution = ['domainSid' => $domainSid ?: $this->properties['domainSid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return DomainCertsContext Context for this DomainCertsInstance
     */
    protected function proxy(): DomainCertsContext
    {
        if (!$this->context) {
            $this->context = new DomainCertsContext(
                $this->version,
                $this->solution['domainSid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the DomainCertsInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the DomainCertsInstance
     *
     * @return DomainCertsInstance Fetched DomainCertsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DomainCertsInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the DomainCertsInstance
     *
     * @param string $tlsCert Contains the full TLS certificate and private for this domain in PEM format: https://en.wikipedia.org/wiki/Privacy-Enhanced_Mail. Twilio uses this information to process HTTPS traffic sent to your domain.
     * @return DomainCertsInstance Updated DomainCertsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $tlsCert): DomainCertsInstance
    {

        return $this->proxy()->update($tlsCert);
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
        return '[Twilio.Messaging.V1.DomainCertsInstance ' . \implode(' ', $context) . ']';
    }
}


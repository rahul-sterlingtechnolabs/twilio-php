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
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class AssistantFallbackActionsContext extends InstanceContext
    {
    /**
     * Initialize the AssistantFallbackActionsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid 
     */
    public function __construct(
        Version $version,
        $assistantSid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'assistantSid' =>
            $assistantSid,
        ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid)
        .'/FallbackActions';
    }

    /**
     * Fetch the AssistantFallbackActionsInstance
     *
     * @return AssistantFallbackActionsInstance Fetched AssistantFallbackActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AssistantFallbackActionsInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new AssistantFallbackActionsInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
        );
    }


    /**
     * Update the AssistantFallbackActionsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AssistantFallbackActionsInstance Updated AssistantFallbackActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): AssistantFallbackActionsInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FallbackActions' =>
                Serialize::jsonObject($options['fallbackActions']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new AssistantFallbackActionsInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
        );
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
        return '[Twilio.Preview.Understand.AssistantFallbackActionsContext ' . \implode(' ', $context) . ']';
    }
}

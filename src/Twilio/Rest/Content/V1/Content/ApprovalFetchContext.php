<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Content
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Content\V1\Content;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class ApprovalFetchContext extends InstanceContext
    {
    /**
     * Initialize the ApprovalFetchContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The Twilio-provided string that uniquely identifies the Content resource whose approval information to fetch.
     */
    public function __construct(
        Version $version,
        $sid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/Content/' . \rawurlencode($sid)
        .'/ApprovalRequests';
    }

    /**
     * Fetch the ApprovalFetchInstance
     *
     * @return ApprovalFetchInstance Fetched ApprovalFetchInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ApprovalFetchInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ApprovalFetchInstance(
            $this->version,
            $payload,
            $this->solution['sid'],
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
        return '[Twilio.Content.V1.ApprovalFetchContext ' . \implode(' ', $context) . ']';
    }
}

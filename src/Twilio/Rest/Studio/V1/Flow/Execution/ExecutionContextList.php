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

namespace Twilio\Rest\Studio\V1\Flow\Execution;

use Twilio\ListResource;
use Twilio\Version;


class ExecutionContextList extends ListResource
    {
    /**
     * Construct the ExecutionContextList
     *
     * @param Version $version Version that contains the resource
     * @param string $flowSid The SID of the Flow with the Execution context to fetch.
     * @param string $executionSid The SID of the Execution context to fetch.
     */
    public function __construct(
        Version $version,
        string $flowSid
        ,
        string $executionSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'flowSid' =>
            $flowSid,
        
        'executionSid' =>
            $executionSid,
        
        ];
    }

    /**
     * Constructs a ExecutionContextContext
     */
    public function getContext(
        
    ): ExecutionContextContext
    {
        return new ExecutionContextContext(
            $this->version,
            $this->solution['flowSid'],
            $this->solution['executionSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Studio.V1.ExecutionContextList]';
    }
}

<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Verify\V2;

use Twilio\ListResource;
use Twilio\Version;


class VerificationAttemptsSummaryList extends ListResource
    {
    /**
     * Construct the VerificationAttemptsSummaryList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version)
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];
    }

    /**
     * Constructs a VerificationAttemptsSummaryContext
     */
    public function getContext(
        
    ): VerificationAttemptsSummaryContext
    {
        return new VerificationAttemptsSummaryContext(
            $this->version
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Verify.V2.VerificationAttemptsSummaryList]';
    }
}

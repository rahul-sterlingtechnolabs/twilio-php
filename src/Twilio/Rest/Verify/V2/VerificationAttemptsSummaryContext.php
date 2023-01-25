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

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class VerificationAttemptsSummaryContext extends InstanceContext
    {
    /**
     * Initialize the VerificationAttemptsSummaryContext
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/Attempts/Summary';
    }

    /**
     * Fetch the VerificationAttemptsSummaryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return VerificationAttemptsSummaryInstance Fetched VerificationAttemptsSummaryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): VerificationAttemptsSummaryInstance
    {

        $options = new Values($options);

        $params = Values::of([
            'VerifyServiceSid' =>
                $options['verifyServiceSid'],
            'DateCreatedAfter' =>
                Serialize::iso8601DateTime($options['dateCreatedAfter']),
            'DateCreatedBefore' =>
                Serialize::iso8601DateTime($options['dateCreatedBefore']),
            'Country' =>
                $options['country'],
            'Channel' =>
                $options['channel'],
            'DestinationPrefix' =>
                $options['destinationPrefix'],
        ]);

        $payload = $this->version->fetch('GET', $this->uri, $params);

        return new VerificationAttemptsSummaryInstance(
            $this->version,
            $payload,
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
        return '[Twilio.Verify.V2.VerificationAttemptsSummaryContext ' . \implode(' ', $context) . ']';
    }
}

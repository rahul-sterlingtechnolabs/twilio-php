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
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;


class ValidationRequestList extends ListResource
    {
    /**
     * Construct the ValidationRequestList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for the new caller ID resource.
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

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/OutgoingCallerIds.json';
    }

    /**
     * Create the ValidationRequestInstance
     *
     * @param string $phoneNumber The phone number to verify in [E.164](https://www.twilio.com/docs/glossary/what-e164) format, which consists of a + followed by the country code and subscriber number.
     * @param array|Options $options Optional Arguments
     * @return ValidationRequestInstance Created ValidationRequestInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $phoneNumber, array $options = []): ValidationRequestInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'PhoneNumber' =>
                $phoneNumber,
            'FriendlyName' =>
                $options['friendlyName'],
            'CallDelay' =>
                $options['callDelay'],
            'Extension' =>
                $options['extension'],
            'StatusCallback' =>
                $options['statusCallback'],
            'StatusCallbackMethod' =>
                $options['statusCallbackMethod'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new ValidationRequestInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Api.V2010.ValidationRequestList]';
    }
}

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


class NewSigningKeyList extends ListResource
    {
    /**
     * Construct the NewSigningKeyList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will be responsible for the new Key resource.
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
        .'/SigningKeys.json';
    }

    /**
     * Create the NewSigningKeyInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NewSigningKeyInstance Created NewSigningKeyInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): NewSigningKeyInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $options['friendlyName'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new NewSigningKeyInstance(
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
        return '[Twilio.Api.V2010.NewSigningKeyList]';
    }
}

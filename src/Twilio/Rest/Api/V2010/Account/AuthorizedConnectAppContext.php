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
use Twilio\Version;
use Twilio\InstanceContext;


class AuthorizedConnectAppContext extends InstanceContext
    {
    /**
     * Initialize the AuthorizedConnectAppContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the AuthorizedConnectApp resource to fetch.
     * @param string $connectAppSid The SID of the Connect App to fetch.
     */
    public function __construct(
        Version $version,
        $accountSid,
        $connectAppSid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        'connectAppSid' =>
            $connectAppSid,
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/AuthorizedConnectApps/' . \rawurlencode($connectAppSid)
        .'.json';
    }

    /**
     * Fetch the AuthorizedConnectAppInstance
     *
     * @return AuthorizedConnectAppInstance Fetched AuthorizedConnectAppInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AuthorizedConnectAppInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new AuthorizedConnectAppInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['connectAppSid'],
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
        return '[Twilio.Api.V2010.AuthorizedConnectAppContext ' . \implode(' ', $context) . ']';
    }
}

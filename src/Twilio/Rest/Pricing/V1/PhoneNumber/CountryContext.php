<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Pricing
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Pricing\V1\PhoneNumber;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class CountryContext extends InstanceContext
    {
    /**
     * Initialize the CountryContext
     *
     * @param Version $version Version that contains the resource
     * @param string $isoCountry The [ISO country code](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the pricing information to fetch.
     */
    public function __construct(
        Version $version,
        $isoCountry
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'isoCountry' =>
            $isoCountry,
        ];

        $this->uri = '/PhoneNumbers/Countries/' . \rawurlencode($isoCountry)
        .'';
    }

    /**
     * Fetch the CountryInstance
     *
     * @return CountryInstance Fetched CountryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CountryInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new CountryInstance(
            $this->version,
            $payload,
            $this->solution['isoCountry'],
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
        return '[Twilio.Pricing.V1.CountryContext ' . \implode(' ', $context) . ']';
    }
}

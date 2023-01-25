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


namespace Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Base\PhoneNumberCapabilities;


/**
 * @property string $friendlyName
 * @property string $phoneNumber
 * @property string $lata
 * @property string $locality
 * @property string $rateCenter
 * @property string $latitude
 * @property string $longitude
 * @property string $region
 * @property string $postalCode
 * @property string $isoCountry
 * @property string $addressRequirements
 * @property bool $beta
 * @property PhoneNumberCapabilities $capabilities
 */
class NationalInstance extends InstanceResource
{
    /**
     * Initialize the NationalInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) requesting the AvailablePhoneNumber resources.
     * @param string $countryCode The [ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code of the country from which to read phone numbers.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $countryCode)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'phoneNumber' => Values::array_get($payload, 'phone_number'),
            'lata' => Values::array_get($payload, 'lata'),
            'locality' => Values::array_get($payload, 'locality'),
            'rateCenter' => Values::array_get($payload, 'rate_center'),
            'latitude' => Values::array_get($payload, 'latitude'),
            'longitude' => Values::array_get($payload, 'longitude'),
            'region' => Values::array_get($payload, 'region'),
            'postalCode' => Values::array_get($payload, 'postal_code'),
            'isoCountry' => Values::array_get($payload, 'iso_country'),
            'addressRequirements' => Values::array_get($payload, 'address_requirements'),
            'beta' => Values::array_get($payload, 'beta'),
            'capabilities' => Deserialize::phoneNumberCapabilities(Values::array_get($payload, 'capabilities')),
        ];

        $this->solution = ['accountSid' => $accountSid, 'countryCode' => $countryCode, ];
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
        return '[Twilio.Api.V2010.NationalInstance]';
    }
}


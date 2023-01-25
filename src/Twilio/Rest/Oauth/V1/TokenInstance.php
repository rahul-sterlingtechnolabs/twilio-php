<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Oauth
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Oauth\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accessToken
 * @property string $refreshToken
 * @property string $idToken
 * @property \DateTime $refreshTokenExpiresAt
 * @property \DateTime $accessTokenExpiresAt
 */
class TokenInstance extends InstanceResource
{
    /**
     * Initialize the TokenInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accessToken' => Values::array_get($payload, 'access_token'),
            'refreshToken' => Values::array_get($payload, 'refresh_token'),
            'idToken' => Values::array_get($payload, 'id_token'),
            'refreshTokenExpiresAt' => Deserialize::dateTime(Values::array_get($payload, 'refresh_token_expires_at')),
            'accessTokenExpiresAt' => Deserialize::dateTime(Values::array_get($payload, 'access_token_expires_at')),
        ];

        $this->solution = [];
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
        return '[Twilio.Oauth.V1.TokenInstance]';
    }
}


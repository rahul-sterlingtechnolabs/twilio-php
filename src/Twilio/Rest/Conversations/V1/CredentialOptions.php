<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1;

use Twilio\Options;
use Twilio\Values;

abstract class CredentialOptions
{
    /**
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     * @return CreateCredentialOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        string $certificate = Values::NONE,
        string $privateKey = Values::NONE,
        bool $sandbox = Values::NONE,
        string $apiKey = Values::NONE,
        string $secret = Values::NONE

    ): CreateCredentialOptions
    {
        return new CreateCredentialOptions(
            $friendlyName,
            $certificate,
            $privateKey,
            $sandbox,
            $apiKey,
            $secret
        );
    }




    /**
     * @param string $type
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     * @return UpdateCredentialOptions Options builder
     */
    public static function update(
        
        string $type = Values::NONE,
        string $friendlyName = Values::NONE,
        string $certificate = Values::NONE,
        string $privateKey = Values::NONE,
        bool $sandbox = Values::NONE,
        string $apiKey = Values::NONE,
        string $secret = Values::NONE

    ): UpdateCredentialOptions
    {
        return new UpdateCredentialOptions(
            $type,
            $friendlyName,
            $certificate,
            $privateKey,
            $sandbox,
            $apiKey,
            $secret
        );
    }

}

class CreateCredentialOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $certificate = Values::NONE,
        string $privateKey = Values::NONE,
        bool $sandbox = Values::NONE,
        string $apiKey = Values::NONE,
        string $secret = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['certificate'] = $certificate;
        $this->options['privateKey'] = $privateKey;
        $this->options['sandbox'] = $sandbox;
        $this->options['apiKey'] = $apiKey;
        $this->options['secret'] = $secret;
    }

    /**
     * A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     *
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @return $this Fluent Builder
     */
    public function setCertificate(string $certificate): self
    {
        $this->options['certificate'] = $certificate;
        return $this;
    }

    /**
     * [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     *
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @return $this Fluent Builder
     */
    public function setPrivateKey(string $privateKey): self
    {
        $this->options['privateKey'] = $privateKey;
        return $this;
    }

    /**
     * [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     *
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @return $this Fluent Builder
     */
    public function setSandbox(bool $sandbox): self
    {
        $this->options['sandbox'] = $sandbox;
        return $this;
    }

    /**
     * [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     *
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @return $this Fluent Builder
     */
    public function setApiKey(string $apiKey): self
    {
        $this->options['apiKey'] = $apiKey;
        return $this;
    }

    /**
     * [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     *
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     * @return $this Fluent Builder
     */
    public function setSecret(string $secret): self
    {
        $this->options['secret'] = $secret;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.CreateCredentialOptions ' . $options . ']';
    }
}




class UpdateCredentialOptions extends Options
    {
    /**
     * @param string $type
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     */
    public function __construct(
        
        string $type = Values::NONE,
        string $friendlyName = Values::NONE,
        string $certificate = Values::NONE,
        string $privateKey = Values::NONE,
        bool $sandbox = Values::NONE,
        string $apiKey = Values::NONE,
        string $secret = Values::NONE

    )
    {
        $this->options['type'] = $type;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['certificate'] = $certificate;
        $this->options['privateKey'] = $privateKey;
        $this->options['sandbox'] = $sandbox;
        $this->options['apiKey'] = $apiKey;
        $this->options['secret'] = $secret;
    }

    /**
     * @param string $type
     * @return $this Fluent Builder
     */
    public function setType(string $type): self
    {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the new resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     *
     * @param string $certificate [APN only] The URL encoded representation of the certificate. For example,  `-----BEGIN CERTIFICATE----- MIIFnTCCBIWgAwIBAgIIAjy9H849+E8wDQYJKoZIhvcNAQEF.....A== -----END CERTIFICATE-----`.
     * @return $this Fluent Builder
     */
    public function setCertificate(string $certificate): self
    {
        $this->options['certificate'] = $certificate;
        return $this;
    }

    /**
     * [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     *
     * @param string $privateKey [APN only] The URL encoded representation of the private key. For example, `-----BEGIN RSA PRIVATE KEY----- MIIEpQIBAAKCAQEAuyf/lNrH9ck8DmNyo3fG... -----END RSA PRIVATE KEY-----`.
     * @return $this Fluent Builder
     */
    public function setPrivateKey(string $privateKey): self
    {
        $this->options['privateKey'] = $privateKey;
        return $this;
    }

    /**
     * [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     *
     * @param bool $sandbox [APN only] Whether to send the credential to sandbox APNs. Can be `true` to send to sandbox APNs or `false` to send to production.
     * @return $this Fluent Builder
     */
    public function setSandbox(bool $sandbox): self
    {
        $this->options['sandbox'] = $sandbox;
        return $this;
    }

    /**
     * [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     *
     * @param string $apiKey [GCM only] The API key for the project that was obtained from the Google Developer console for your GCM Service application credential.
     * @return $this Fluent Builder
     */
    public function setApiKey(string $apiKey): self
    {
        $this->options['apiKey'] = $apiKey;
        return $this;
    }

    /**
     * [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     *
     * @param string $secret [FCM only] The **Server key** of your project from the Firebase console, found under Settings / Cloud messaging.
     * @return $this Fluent Builder
     */
    public function setSecret(string $secret): self
    {
        $this->options['secret'] = $secret;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.UpdateCredentialOptions ' . $options . ']';
    }
}


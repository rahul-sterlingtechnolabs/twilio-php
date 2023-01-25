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

use Twilio\Options;
use Twilio\Values;

abstract class ConnectAppOptions
{



    /**
     * @param string $authorizeRedirectUrl The URL to redirect the user to after we authenticate the user and obtain authorization to access the Connect App.
     * @param string $companyName The company name to set for the Connect App.
     * @param string $deauthorizeCallbackMethod The HTTP method to use when calling `deauthorize_callback_url`.
     * @param string $deauthorizeCallbackUrl The URL to call using the `deauthorize_callback_method` to de-authorize the Connect App.
     * @param string $description A description of the Connect App.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $homepageUrl A public URL where users can obtain more information about this Connect App.
     * @param string $permissions A comma-separated list of the permissions you will request from the users of this ConnectApp.  Can include: `get-all` and `post-all`.
     * @return UpdateConnectAppOptions Options builder
     */
    public static function update(
        
        string $authorizeRedirectUrl = Values::NONE,
        string $companyName = Values::NONE,
        string $deauthorizeCallbackMethod = Values::NONE,
        string $deauthorizeCallbackUrl = Values::NONE,
        string $description = Values::NONE,
        string $friendlyName = Values::NONE,
        string $homepageUrl = Values::NONE,
        array $permissions = Values::ARRAY_NONE

    ): UpdateConnectAppOptions
    {
        return new UpdateConnectAppOptions(
            $authorizeRedirectUrl,
            $companyName,
            $deauthorizeCallbackMethod,
            $deauthorizeCallbackUrl,
            $description,
            $friendlyName,
            $homepageUrl,
            $permissions
        );
    }

}




class UpdateConnectAppOptions extends Options
    {
    /**
     * @param string $authorizeRedirectUrl The URL to redirect the user to after we authenticate the user and obtain authorization to access the Connect App.
     * @param string $companyName The company name to set for the Connect App.
     * @param string $deauthorizeCallbackMethod The HTTP method to use when calling `deauthorize_callback_url`.
     * @param string $deauthorizeCallbackUrl The URL to call using the `deauthorize_callback_method` to de-authorize the Connect App.
     * @param string $description A description of the Connect App.
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $homepageUrl A public URL where users can obtain more information about this Connect App.
     * @param string $permissions A comma-separated list of the permissions you will request from the users of this ConnectApp.  Can include: `get-all` and `post-all`.
     */
    public function __construct(
        
        string $authorizeRedirectUrl = Values::NONE,
        string $companyName = Values::NONE,
        string $deauthorizeCallbackMethod = Values::NONE,
        string $deauthorizeCallbackUrl = Values::NONE,
        string $description = Values::NONE,
        string $friendlyName = Values::NONE,
        string $homepageUrl = Values::NONE,
        array $permissions = Values::ARRAY_NONE

    )
    {
        $this->options['authorizeRedirectUrl'] = $authorizeRedirectUrl;
        $this->options['companyName'] = $companyName;
        $this->options['deauthorizeCallbackMethod'] = $deauthorizeCallbackMethod;
        $this->options['deauthorizeCallbackUrl'] = $deauthorizeCallbackUrl;
        $this->options['description'] = $description;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['homepageUrl'] = $homepageUrl;
        $this->options['permissions'] = $permissions;
    }

    /**
     * The URL to redirect the user to after we authenticate the user and obtain authorization to access the Connect App.
     *
     * @param string $authorizeRedirectUrl The URL to redirect the user to after we authenticate the user and obtain authorization to access the Connect App.
     * @return $this Fluent Builder
     */
    public function setAuthorizeRedirectUrl(string $authorizeRedirectUrl): self
    {
        $this->options['authorizeRedirectUrl'] = $authorizeRedirectUrl;
        return $this;
    }

    /**
     * The company name to set for the Connect App.
     *
     * @param string $companyName The company name to set for the Connect App.
     * @return $this Fluent Builder
     */
    public function setCompanyName(string $companyName): self
    {
        $this->options['companyName'] = $companyName;
        return $this;
    }

    /**
     * The HTTP method to use when calling `deauthorize_callback_url`.
     *
     * @param string $deauthorizeCallbackMethod The HTTP method to use when calling `deauthorize_callback_url`.
     * @return $this Fluent Builder
     */
    public function setDeauthorizeCallbackMethod(string $deauthorizeCallbackMethod): self
    {
        $this->options['deauthorizeCallbackMethod'] = $deauthorizeCallbackMethod;
        return $this;
    }

    /**
     * The URL to call using the `deauthorize_callback_method` to de-authorize the Connect App.
     *
     * @param string $deauthorizeCallbackUrl The URL to call using the `deauthorize_callback_method` to de-authorize the Connect App.
     * @return $this Fluent Builder
     */
    public function setDeauthorizeCallbackUrl(string $deauthorizeCallbackUrl): self
    {
        $this->options['deauthorizeCallbackUrl'] = $deauthorizeCallbackUrl;
        return $this;
    }

    /**
     * A description of the Connect App.
     *
     * @param string $description A description of the Connect App.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self
    {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A public URL where users can obtain more information about this Connect App.
     *
     * @param string $homepageUrl A public URL where users can obtain more information about this Connect App.
     * @return $this Fluent Builder
     */
    public function setHomepageUrl(string $homepageUrl): self
    {
        $this->options['homepageUrl'] = $homepageUrl;
        return $this;
    }

    /**
     * A comma-separated list of the permissions you will request from the users of this ConnectApp.  Can include: `get-all` and `post-all`.
     *
     * @param string $permissions A comma-separated list of the permissions you will request from the users of this ConnectApp.  Can include: `get-all` and `post-all`.
     * @return $this Fluent Builder
     */
    public function setPermissions(array $permissions): self
    {
        $this->options['permissions'] = $permissions;
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
        return '[Twilio.Api.V2010.UpdateConnectAppOptions ' . $options . ']';
    }
}


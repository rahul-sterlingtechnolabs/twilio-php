<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance\Bundle;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;


class ReplaceItemsList extends ListResource
    {
    /**
     * Construct the ReplaceItemsList
     *
     * @param Version $version Version that contains the resource
     * @param string $bundleSid The unique string that identifies the Bundle where the item assignments are going to be replaced.
     */
    public function __construct(
        Version $version,
        string $bundleSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'bundleSid' =>
            $bundleSid,
        
        ];

        $this->uri = '/RegulatoryCompliance/Bundles/' . \rawurlencode($bundleSid)
        .'/ReplaceItems';
    }

    /**
     * Create the ReplaceItemsInstance
     *
     * @param string $fromBundleSid The source bundle sid to copy the item assignments from.
     * @return ReplaceItemsInstance Created ReplaceItemsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $fromBundleSid): ReplaceItemsInstance
    {

        $data = Values::of([
            'FromBundleSid' =>
                $fromBundleSid,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new ReplaceItemsInstance(
            $this->version,
            $payload,
            $this->solution['bundleSid'],
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Numbers.V2.ReplaceItemsList]';
    }
}

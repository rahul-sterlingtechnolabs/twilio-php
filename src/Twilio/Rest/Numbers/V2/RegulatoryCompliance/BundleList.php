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

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class BundleList extends ListResource
    {
    /**
     * Construct the BundleList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version)
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/RegulatoryCompliance/Bundles';
    }

    /**
     * Create the BundleInstance
     *
     * @param string $friendlyName The string that you assigned to describe the resource.
     * @param string $email The email address that will receive updates when the Bundle resource changes status.
     * @param array|Options $options Optional Arguments
     * @return BundleInstance Created BundleInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $friendlyName, string $email, array $options = []): BundleInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $friendlyName,
            'Email' =>
                $email,
            'StatusCallback' =>
                $options['statusCallback'],
            'RegulationSid' =>
                $options['regulationSid'],
            'IsoCountry' =>
                $options['isoCountry'],
            'EndUserType' =>
                $options['endUserType'],
            'NumberType' =>
                $options['numberType'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new BundleInstance(
            $this->version,
            $payload,
        );
    }


    /**
     * Reads BundleInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return BundleInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams BundleInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of BundleInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return BundlePage Page of BundleInstance
     */
    public function page(
        array $options = [],
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): BundlePage
    {
        $options = new Values($options);

        $params = Values::of([
            'Status' =>
                $options['status'],
            'FriendlyName' =>
                $options['friendlyName'],
            'RegulationSid' =>
                $options['regulationSid'],
            'IsoCountry' =>
                $options['isoCountry'],
            'NumberType' =>
                $options['numberType'],
            'HasValidUntilDate' =>
                Serialize::booleanToString($options['hasValidUntilDate']),
            'SortBy' =>
                $options['sortBy'],
            'SortDirection' =>
                $options['sortDirection'],
            'ValidUntilDate<' =>
                Serialize::iso8601DateTime($options['validUntilDateBefore']),
            'ValidUntilDate' =>
                Serialize::iso8601DateTime($options['validUntilDate']),
            'ValidUntilDate>' =>
                Serialize::iso8601DateTime($options['validUntilDateAfter']),
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new BundlePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of BundleInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return BundlePage Page of BundleInstance
     */
    public function getPage(string $targetUrl): BundlePage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new BundlePage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a BundleContext
     *
     * @param string $sid The unique string that we created to identify the Bundle resource.
     */
    public function getContext(
        string $sid
        
    ): BundleContext
    {
        return new BundleContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Numbers.V2.BundleList]';
    }
}

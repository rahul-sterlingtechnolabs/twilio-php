<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trunking
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Trunking\V1\Trunk;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class IpAccessControlListList extends ListResource
    {
    /**
     * Construct the IpAccessControlListList
     *
     * @param Version $version Version that contains the resource
     * @param string $trunkSid The SID of the Trunk to associate the IP Access Control List with.
     */
    public function __construct(
        Version $version,
        string $trunkSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'trunkSid' =>
            $trunkSid,
        
        ];

        $this->uri = '/Trunks/' . \rawurlencode($trunkSid)
        .'/IpAccessControlLists';
    }

    /**
     * Create the IpAccessControlListInstance
     *
     * @param string $ipAccessControlListSid The SID of the [IP Access Control List](https://www.twilio.com/docs/voice/sip/api/sip-ipaccesscontrollist-resource) that you want to associate with the trunk.
     * @return IpAccessControlListInstance Created IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $ipAccessControlListSid): IpAccessControlListInstance
    {

        $data = Values::of([
            'IpAccessControlListSid' =>
                $ipAccessControlListSid,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['trunkSid'],
        );
    }


    /**
     * Reads IpAccessControlListInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return IpAccessControlListInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams IpAccessControlListInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
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
    public function stream(int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of IpAccessControlListInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return IpAccessControlListPage Page of IpAccessControlListInstance
     */
    public function page(
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): IpAccessControlListPage
    {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new IpAccessControlListPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of IpAccessControlListInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return IpAccessControlListPage Page of IpAccessControlListInstance
     */
    public function getPage(string $targetUrl): IpAccessControlListPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new IpAccessControlListPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a IpAccessControlListContext
     *
     * @param string $sid The unique string that we created to identify the IpAccessControlList resource to delete.
     */
    public function getContext(
        string $sid
        
    ): IpAccessControlListContext
    {
        return new IpAccessControlListContext(
            $this->version,
            $this->solution['trunkSid'],
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
        return '[Twilio.Trunking.V1.IpAccessControlListList]';
    }
}

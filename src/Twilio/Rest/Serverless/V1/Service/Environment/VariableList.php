<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Serverless\V1\Service\Environment;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class VariableList extends ListResource
    {
    /**
     * Construct the VariableList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to create the Variable resource under.
     * @param string $environmentSid The SID of the Environment in which the Variable resource exists.
     */
    public function __construct(
        Version $version,
        string $serviceSid
        ,
        string $environmentSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        
        'environmentSid' =>
            $environmentSid,
        
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Environments/' . \rawurlencode($environmentSid)
        .'/Variables';
    }

    /**
     * Create the VariableInstance
     *
     * @param string $key A string by which the Variable resource can be referenced. It can be a maximum of 128 characters.
     * @param string $value A string that contains the actual value of the Variable. It can be a maximum of 450 bytes in size.
     * @return VariableInstance Created VariableInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $key, string $value): VariableInstance
    {

        $data = Values::of([
            'Key' =>
                $key,
            'Value' =>
                $value,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new VariableInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['environmentSid'],
        );
    }


    /**
     * Reads VariableInstance records from the API as a list.
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
     * @return VariableInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams VariableInstance records from the API as a generator stream.
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
     * Retrieve a single page of VariableInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return VariablePage Page of VariableInstance
     */
    public function page(
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): VariablePage
    {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new VariablePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of VariableInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return VariablePage Page of VariableInstance
     */
    public function getPage(string $targetUrl): VariablePage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new VariablePage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a VariableContext
     *
     * @param string $sid The SID of the Variable resource to delete.
     */
    public function getContext(
        string $sid
        
    ): VariableContext
    {
        return new VariableContext(
            $this->version,
            $this->solution['serviceSid'],
            $this->solution['environmentSid'],
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
        return '[Twilio.Serverless.V1.VariableList]';
    }
}

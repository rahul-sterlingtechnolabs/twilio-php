<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\FlexApi\V1\Interaction\InteractionChannel;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class InteractionChannelParticipantList extends ListResource
    {
    /**
     * Construct the InteractionChannelParticipantList
     *
     * @param Version $version Version that contains the resource
     * @param string $interactionSid The Interaction Sid for the new Channel Participant.
     * @param string $channelSid The Channel Sid for the new Channel Participant.
     */
    public function __construct(
        Version $version,
        string $interactionSid
        ,
        string $channelSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'interactionSid' =>
            $interactionSid,
        
        'channelSid' =>
            $channelSid,
        
        ];

        $this->uri = '/Interactions/' . \rawurlencode($interactionSid)
        .'/Channels/' . \rawurlencode($channelSid)
        .'/Participants';
    }

    /**
     * Create the InteractionChannelParticipantInstance
     *
     * @param string $type
     * @param array $mediaProperties JSON representing the Media Properties for the new Participant.
     * @return InteractionChannelParticipantInstance Created InteractionChannelParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $type, array $mediaProperties): InteractionChannelParticipantInstance
    {

        $data = Values::of([
            'Type' =>
                $type,
            'MediaProperties' =>
                Serialize::jsonObject($mediaProperties),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new InteractionChannelParticipantInstance(
            $this->version,
            $payload,
            $this->solution['interactionSid'],
            $this->solution['channelSid'],
        );
    }


    /**
     * Reads InteractionChannelParticipantInstance records from the API as a list.
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
     * @return InteractionChannelParticipantInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams InteractionChannelParticipantInstance records from the API as a generator stream.
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
     * Retrieve a single page of InteractionChannelParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return InteractionChannelParticipantPage Page of InteractionChannelParticipantInstance
     */
    public function page(
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): InteractionChannelParticipantPage
    {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new InteractionChannelParticipantPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of InteractionChannelParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return InteractionChannelParticipantPage Page of InteractionChannelParticipantInstance
     */
    public function getPage(string $targetUrl): InteractionChannelParticipantPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new InteractionChannelParticipantPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a InteractionChannelParticipantContext
     *
     * @param string $sid The unique string created by Twilio to identify an Interaction Channel resource.
     */
    public function getContext(
        string $sid
        
    ): InteractionChannelParticipantContext
    {
        return new InteractionChannelParticipantContext(
            $this->version,
            $this->solution['interactionSid'],
            $this->solution['channelSid'],
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
        return '[Twilio.FlexApi.V1.InteractionChannelParticipantList]';
    }
}

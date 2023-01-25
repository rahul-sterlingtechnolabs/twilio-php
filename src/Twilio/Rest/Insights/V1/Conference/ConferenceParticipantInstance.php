<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Insights
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Insights\V1\Conference;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $participantSid
 * @property string $label
 * @property string $conferenceSid
 * @property string $callSid
 * @property string $accountSid
 * @property string $callDirection
 * @property string $from
 * @property string $to
 * @property string $callStatus
 * @property string $countryCode
 * @property bool $isModerator
 * @property \DateTime $joinTime
 * @property \DateTime $leaveTime
 * @property int $durationSeconds
 * @property int $outboundQueueLength
 * @property int $outboundTimeInQueue
 * @property string $jitterBufferSize
 * @property bool $isCoach
 * @property string[] $coachedParticipants
 * @property string $participantRegion
 * @property string $conferenceRegion
 * @property string $callType
 * @property string $processingState
 * @property array $properties
 * @property array $events
 * @property array $metrics
 * @property string $url
 */
class ConferenceParticipantInstance extends InstanceResource
{
    /**
     * Initialize the ConferenceParticipantInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $conferenceSid The unique SID identifier of the Conference.
     * @param string $participantSid The unique SID identifier of the Participant.
     */
    public function __construct(Version $version, array $payload, string $conferenceSid, string $participantSid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'participantSid' => Values::array_get($payload, 'participant_sid'),
            'label' => Values::array_get($payload, 'label'),
            'conferenceSid' => Values::array_get($payload, 'conference_sid'),
            'callSid' => Values::array_get($payload, 'call_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'callDirection' => Values::array_get($payload, 'call_direction'),
            'from' => Values::array_get($payload, 'from'),
            'to' => Values::array_get($payload, 'to'),
            'callStatus' => Values::array_get($payload, 'call_status'),
            'countryCode' => Values::array_get($payload, 'country_code'),
            'isModerator' => Values::array_get($payload, 'is_moderator'),
            'joinTime' => Deserialize::dateTime(Values::array_get($payload, 'join_time')),
            'leaveTime' => Deserialize::dateTime(Values::array_get($payload, 'leave_time')),
            'durationSeconds' => Values::array_get($payload, 'duration_seconds'),
            'outboundQueueLength' => Values::array_get($payload, 'outbound_queue_length'),
            'outboundTimeInQueue' => Values::array_get($payload, 'outbound_time_in_queue'),
            'jitterBufferSize' => Values::array_get($payload, 'jitter_buffer_size'),
            'isCoach' => Values::array_get($payload, 'is_coach'),
            'coachedParticipants' => Values::array_get($payload, 'coached_participants'),
            'participantRegion' => Values::array_get($payload, 'participant_region'),
            'conferenceRegion' => Values::array_get($payload, 'conference_region'),
            'callType' => Values::array_get($payload, 'call_type'),
            'processingState' => Values::array_get($payload, 'processing_state'),
            'properties' => Values::array_get($payload, 'properties'),
            'events' => Values::array_get($payload, 'events'),
            'metrics' => Values::array_get($payload, 'metrics'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['conferenceSid' => $conferenceSid, 'participantSid' => $participantSid ?: $this->properties['participantSid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ConferenceParticipantContext Context for this ConferenceParticipantInstance
     */
    protected function proxy(): ConferenceParticipantContext
    {
        if (!$this->context) {
            $this->context = new ConferenceParticipantContext(
                $this->version,
                $this->solution['conferenceSid'],
                $this->solution['participantSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the ConferenceParticipantInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConferenceParticipantInstance Fetched ConferenceParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): ConferenceParticipantInstance
    {

        return $this->proxy()->fetch($options);
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
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Insights.V1.ConferenceParticipantInstance ' . \implode(' ', $context) . ']';
    }
}


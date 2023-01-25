<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class WorkerChannelContext extends InstanceContext
    {
    /**
     * Initialize the WorkerChannelContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the WorkerChannel to fetch.
     * @param string $workerSid The SID of the Worker with the WorkerChannel to fetch.
     * @param string $sid The SID of the WorkerChannel to fetch.
     */
    public function __construct(
        Version $version,
        $workspaceSid,
        $workerSid,
        $sid
    )
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'workspaceSid' =>
            $workspaceSid,
        'workerSid' =>
            $workerSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid)
        .'/Workers/' . \rawurlencode($workerSid)
        .'/Channels/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the WorkerChannelInstance
     *
     * @return WorkerChannelInstance Fetched WorkerChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WorkerChannelInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new WorkerChannelInstance(
            $this->version,
            $payload,
            $this->solution['workspaceSid'],
            $this->solution['workerSid'],
            $this->solution['sid'],
        );
    }


    /**
     * Update the WorkerChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkerChannelInstance Updated WorkerChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WorkerChannelInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Capacity' =>
                $options['capacity'],
            'Available' =>
                Serialize::booleanToString($options['available']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new WorkerChannelInstance(
            $this->version,
            $payload,
            $this->solution['workspaceSid'],
            $this->solution['workerSid'],
            $this->solution['sid'],
        );
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
        return '[Twilio.Taskrouter.V1.WorkerChannelContext ' . \implode(' ', $context) . ']';
    }
}

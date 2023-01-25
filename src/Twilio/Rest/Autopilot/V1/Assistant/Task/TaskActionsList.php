<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Autopilot\V1\Assistant\Task;

use Twilio\ListResource;
use Twilio\Version;


class TaskActionsList extends ListResource
    {
    /**
     * Construct the TaskActionsList
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the [Assistant](https://www.twilio.com/docs/autopilot/api/assistant) that is the parent of the Task for which the task actions to fetch were defined.
     * @param string $taskSid The SID of the [Task](https://www.twilio.com/docs/autopilot/api/task) for which the task actions to fetch were defined.
     */
    public function __construct(
        Version $version,
        string $assistantSid
        ,
        string $taskSid
        )
        {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'assistantSid' =>
            $assistantSid,
        
        'taskSid' =>
            $taskSid,
        
        ];
    }

    /**
     * Constructs a TaskActionsContext
     */
    public function getContext(
        
    ): TaskActionsContext
    {
        return new TaskActionsContext(
            $this->version,
            $this->solution['assistantSid'],
            $this->solution['taskSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Autopilot.V1.TaskActionsList]';
    }
}

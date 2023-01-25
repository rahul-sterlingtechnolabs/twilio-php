<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Options;
use Twilio\Values;

abstract class TaskOptions
{
    /**
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     * @return CreateTaskOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        array $actions = Values::ARRAY_NONE,
        string $actionsUrl = Values::NONE

    ): CreateTaskOptions
    {
        return new CreateTaskOptions(
            $friendlyName,
            $actions,
            $actionsUrl
        );
    }




    /**
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @param string $uniqueName A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     * @return UpdateTaskOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $uniqueName = Values::NONE,
        array $actions = Values::ARRAY_NONE,
        string $actionsUrl = Values::NONE

    ): UpdateTaskOptions
    {
        return new UpdateTaskOptions(
            $friendlyName,
            $uniqueName,
            $actions,
            $actionsUrl
        );
    }

}

class CreateTaskOptions extends Options
    {
    /**
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        array $actions = Values::ARRAY_NONE,
        string $actionsUrl = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['actions'] = $actions;
        $this->options['actionsUrl'] = $actionsUrl;
    }

    /**
     * A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     *
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     *
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @return $this Fluent Builder
     */
    public function setActions(array $actions): self
    {
        $this->options['actions'] = $actions;
        return $this;
    }

    /**
     * User-provided HTTP endpoint where from the assistant fetches actions
     *
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     * @return $this Fluent Builder
     */
    public function setActionsUrl(string $actionsUrl): self
    {
        $this->options['actionsUrl'] = $actionsUrl;
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
        return '[Twilio.Preview.Understand.CreateTaskOptions ' . $options . ']';
    }
}




class UpdateTaskOptions extends Options
    {
    /**
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @param string $uniqueName A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $uniqueName = Values::NONE,
        array $actions = Values::ARRAY_NONE,
        string $actionsUrl = Values::NONE

    )
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['actions'] = $actions;
        $this->options['actionsUrl'] = $actionsUrl;
    }

    /**
     * A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     *
     * @param string $friendlyName A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     *
     * @param string $uniqueName A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     *
     * @param array $actions A user-provided JSON object encoded as a string to specify the actions for this task. It is optional and non-unique.
     * @return $this Fluent Builder
     */
    public function setActions(array $actions): self
    {
        $this->options['actions'] = $actions;
        return $this;
    }

    /**
     * User-provided HTTP endpoint where from the assistant fetches actions
     *
     * @param string $actionsUrl User-provided HTTP endpoint where from the assistant fetches actions
     * @return $this Fluent Builder
     */
    public function setActionsUrl(string $actionsUrl): self
    {
        $this->options['actionsUrl'] = $actionsUrl;
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
        return '[Twilio.Preview.Understand.UpdateTaskOptions ' . $options . ']';
    }
}


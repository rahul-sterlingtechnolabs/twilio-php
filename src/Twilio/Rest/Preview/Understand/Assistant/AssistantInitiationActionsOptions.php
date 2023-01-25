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

abstract class AssistantInitiationActionsOptions
{

    /**
     * @param array $initiationActions 
     * @return UpdateAssistantInitiationActionsOptions Options builder
     */
    public static function update(
        
        array $initiationActions = Values::ARRAY_NONE

    ): UpdateAssistantInitiationActionsOptions
    {
        return new UpdateAssistantInitiationActionsOptions(
            $initiationActions
        );
    }

}


class UpdateAssistantInitiationActionsOptions extends Options
    {
    /**
     * @param array $initiationActions 
     */
    public function __construct(
        
        array $initiationActions = Values::ARRAY_NONE

    )
    {
        $this->options['initiationActions'] = $initiationActions;
    }

    /**
     * 
     *
     * @param array $initiationActions 
     * @return $this Fluent Builder
     */
    public function setInitiationActions(array $initiationActions): self
    {
        $this->options['initiationActions'] = $initiationActions;
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
        return '[Twilio.Preview.Understand.UpdateAssistantInitiationActionsOptions ' . $options . ']';
    }
}


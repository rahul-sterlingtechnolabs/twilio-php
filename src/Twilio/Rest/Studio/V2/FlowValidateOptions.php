<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Studio
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Studio\V2;

use Twilio\Options;
use Twilio\Values;

abstract class FlowValidateOptions
{
    /**
     * @param string $commitMessage Description of change made in the revision.
     * @return UpdateFlowValidateOptions Options builder
     */
    public static function update(
        
        string $commitMessage = Values::NONE

    ): UpdateFlowValidateOptions
    {
        return new UpdateFlowValidateOptions(
            $commitMessage
        );
    }

}

class UpdateFlowValidateOptions extends Options
    {
    /**
     * @param string $commitMessage Description of change made in the revision.
     */
    public function __construct(
        
        string $commitMessage = Values::NONE

    )
    {
        $this->options['commitMessage'] = $commitMessage;
    }

    /**
     * Description of change made in the revision.
     *
     * @param string $commitMessage Description of change made in the revision.
     * @return $this Fluent Builder
     */
    public function setCommitMessage(string $commitMessage): self
    {
        $this->options['commitMessage'] = $commitMessage;
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
        return '[Twilio.Studio.V2.UpdateFlowValidateOptions ' . $options . ']';
    }
}


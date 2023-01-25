<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class WebhookOptions
{
    /**
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @param string $configurationMethod
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` is `studio`.
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     * @return CreateWebhookOptions Options builder
     */
    public static function create(
        
        string $configurationUrl = Values::NONE,
        string $configurationMethod = Values::NONE,
        array $configurationFilters = Values::ARRAY_NONE,
        array $configurationTriggers = Values::ARRAY_NONE,
        string $configurationFlowSid = Values::NONE,
        int $configurationRetryCount = Values::NONE

    ): CreateWebhookOptions
    {
        return new CreateWebhookOptions(
            $configurationUrl,
            $configurationMethod,
            $configurationFilters,
            $configurationTriggers,
            $configurationFlowSid,
            $configurationRetryCount
        );
    }




    /**
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @param string $configurationMethod
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` = `studio`.
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     * @return UpdateWebhookOptions Options builder
     */
    public static function update(
        
        string $configurationUrl = Values::NONE,
        string $configurationMethod = Values::NONE,
        array $configurationFilters = Values::ARRAY_NONE,
        array $configurationTriggers = Values::ARRAY_NONE,
        string $configurationFlowSid = Values::NONE,
        int $configurationRetryCount = Values::NONE

    ): UpdateWebhookOptions
    {
        return new UpdateWebhookOptions(
            $configurationUrl,
            $configurationMethod,
            $configurationFilters,
            $configurationTriggers,
            $configurationFlowSid,
            $configurationRetryCount
        );
    }

}

class CreateWebhookOptions extends Options
    {
    /**
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @param string $configurationMethod
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` is `studio`.
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     */
    public function __construct(
        
        string $configurationUrl = Values::NONE,
        string $configurationMethod = Values::NONE,
        array $configurationFilters = Values::ARRAY_NONE,
        array $configurationTriggers = Values::ARRAY_NONE,
        string $configurationFlowSid = Values::NONE,
        int $configurationRetryCount = Values::NONE

    )
    {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
     * The URL of the webhook to call using the `configuration.method`.
     *
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl(string $configurationUrl): self
    {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * @param string $configurationMethod
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod(string $configurationMethod): self
    {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     *
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters(array $configurationFilters): self
    {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     *
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers(array $configurationTriggers): self
    {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` is `studio`.
     *
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` is `studio`.
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid(string $configurationFlowSid): self
    {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount(int $configurationRetryCount): self
    {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
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
        return '[Twilio.Chat.V2.CreateWebhookOptions ' . $options . ']';
    }
}




class UpdateWebhookOptions extends Options
    {
    /**
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @param string $configurationMethod
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` = `studio`.
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     */
    public function __construct(
        
        string $configurationUrl = Values::NONE,
        string $configurationMethod = Values::NONE,
        array $configurationFilters = Values::ARRAY_NONE,
        array $configurationTriggers = Values::ARRAY_NONE,
        string $configurationFlowSid = Values::NONE,
        int $configurationRetryCount = Values::NONE

    )
    {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
     * The URL of the webhook to call using the `configuration.method`.
     *
     * @param string $configurationUrl The URL of the webhook to call using the `configuration.method`.
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl(string $configurationUrl): self
    {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * @param string $configurationMethod
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod(string $configurationMethod): self
    {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     *
     * @param string[] $configurationFilters The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters(array $configurationFilters): self
    {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     *
     * @param string[] $configurationTriggers A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers(array $configurationTriggers): self
    {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` = `studio`.
     *
     * @param string $configurationFlowSid The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` = `studio`.
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid(string $configurationFlowSid): self
    {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount(int $configurationRetryCount): self
    {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
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
        return '[Twilio.Chat.V2.UpdateWebhookOptions ' . $options . ']';
    }
}


<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account\Usage\Record;

use Twilio\Options;
use Twilio\Values;

abstract class AllTimeOptions
{
    /**
     * @param string $category The [usage category](https://www.twilio.com/docs/usage/api/usage-record#usage-categories) of the UsageRecord resources to read. Only UsageRecord resources in the specified category are retrieved.
     * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as `YYYY-MM-DD`. You can also specify offsets from the current date, such as: `-30days`, which will set the start date to be 30 days before the current date.
     * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as `YYYY-MM-DD`.  You can also specify offsets from the current date, such as: `+30days`, which will set the end date to 30 days from the current date.
     * @param bool $includeSubaccounts Whether to include usage from the master account and all its subaccounts. Can be: `true` (the default) to include usage from the master account and all subaccounts or `false` to retrieve usage from only the specified account.
     * @return ReadAllTimeOptions Options builder
     */
    public static function read(
        
        string $category = Values::NONE,
        \DateTime $startDate = Values::NONE,
        \DateTime $endDate = Values::NONE,
        bool $includeSubaccounts = Values::NONE

    ): ReadAllTimeOptions
    {
        return new ReadAllTimeOptions(
            $category,
            $startDate,
            $endDate,
            $includeSubaccounts
        );
    }

}

class ReadAllTimeOptions extends Options
    {
    /**
     * @param string $category The [usage category](https://www.twilio.com/docs/usage/api/usage-record#usage-categories) of the UsageRecord resources to read. Only UsageRecord resources in the specified category are retrieved.
     * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as `YYYY-MM-DD`. You can also specify offsets from the current date, such as: `-30days`, which will set the start date to be 30 days before the current date.
     * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as `YYYY-MM-DD`.  You can also specify offsets from the current date, such as: `+30days`, which will set the end date to 30 days from the current date.
     * @param bool $includeSubaccounts Whether to include usage from the master account and all its subaccounts. Can be: `true` (the default) to include usage from the master account and all subaccounts or `false` to retrieve usage from only the specified account.
     */
    public function __construct(
        
        string $category = Values::NONE,
        \DateTime $startDate = Values::NONE,
        \DateTime $endDate = Values::NONE,
        bool $includeSubaccounts = Values::NONE

    )
    {
        $this->options['category'] = $category;
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
        $this->options['includeSubaccounts'] = $includeSubaccounts;
    }

    /**
     * The [usage category](https://www.twilio.com/docs/usage/api/usage-record#usage-categories) of the UsageRecord resources to read. Only UsageRecord resources in the specified category are retrieved.
     *
     * @param string $category The [usage category](https://www.twilio.com/docs/usage/api/usage-record#usage-categories) of the UsageRecord resources to read. Only UsageRecord resources in the specified category are retrieved.
     * @return $this Fluent Builder
     */
    public function setCategory(string $category): self
    {
        $this->options['category'] = $category;
        return $this;
    }

    /**
     * Only include usage that has occurred on or after this date. Specify the date in GMT and format as `YYYY-MM-DD`. You can also specify offsets from the current date, such as: `-30days`, which will set the start date to be 30 days before the current date.
     *
     * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as `YYYY-MM-DD`. You can also specify offsets from the current date, such as: `-30days`, which will set the start date to be 30 days before the current date.
     * @return $this Fluent Builder
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * Only include usage that occurred on or before this date. Specify the date in GMT and format as `YYYY-MM-DD`.  You can also specify offsets from the current date, such as: `+30days`, which will set the end date to 30 days from the current date.
     *
     * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as `YYYY-MM-DD`.  You can also specify offsets from the current date, such as: `+30days`, which will set the end date to 30 days from the current date.
     * @return $this Fluent Builder
     */
    public function setEndDate(\DateTime $endDate): self
    {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * Whether to include usage from the master account and all its subaccounts. Can be: `true` (the default) to include usage from the master account and all subaccounts or `false` to retrieve usage from only the specified account.
     *
     * @param bool $includeSubaccounts Whether to include usage from the master account and all its subaccounts. Can be: `true` (the default) to include usage from the master account and all subaccounts or `false` to retrieve usage from only the specified account.
     * @return $this Fluent Builder
     */
    public function setIncludeSubaccounts(bool $includeSubaccounts): self
    {
        $this->options['includeSubaccounts'] = $includeSubaccounts;
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
        return '[Twilio.Api.V2010.ReadAllTimeOptions ' . $options . ']';
    }
}


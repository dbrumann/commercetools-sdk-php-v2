<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartClassificationType extends ShippingRateInputType
{
    public const FIELD_VALUES = 'values';

    /**
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?CustomFieldLocalizedEnumValueCollection $values
     */
    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}

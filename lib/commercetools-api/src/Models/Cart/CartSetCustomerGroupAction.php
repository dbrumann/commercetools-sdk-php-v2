<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetCustomerGroupAction extends CartUpdateAction
{
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}

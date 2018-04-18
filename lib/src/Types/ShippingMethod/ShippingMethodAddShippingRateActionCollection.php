<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollection;


interface ShippingMethodAddShippingRateActionCollection extends ShippingMethodUpdateActionCollection {
    /**
     * @param $index
     * @return ShippingMethodAddShippingRateAction
     */
    public function at($index);

    /**
     * @return ShippingMethodAddShippingRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodAddShippingRateAction
     */
    public function map($data, $index);
}

<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderAddDeliveryActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderAddDeliveryAction
     */
    public function at($index);

    /**
     * @return OrderAddDeliveryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderAddDeliveryAction
     */
    public function map($data, $index);
}

<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderAddPaymentActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderAddPaymentAction
     */
    public function at($index);

    /**
     * @return OrderAddPaymentAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderAddPaymentAction
     */
    public function map($data, $index);
}

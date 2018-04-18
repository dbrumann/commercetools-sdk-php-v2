<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentSetMethodInfoNameActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentSetMethodInfoNameAction
     */
    public function at($index);

    /**
     * @return PaymentSetMethodInfoNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentSetMethodInfoNameAction
     */
    public function map($data, $index);
}

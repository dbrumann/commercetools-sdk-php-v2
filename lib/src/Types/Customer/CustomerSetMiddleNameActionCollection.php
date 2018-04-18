<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetMiddleNameActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetMiddleNameAction
     */
    public function at($index);

    /**
     * @return CustomerSetMiddleNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetMiddleNameAction
     */
    public function map($data, $index);
}

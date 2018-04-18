<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\CustomerGroup\CustomerGroupUpdateActionCollection;


interface CustomerGroupSetKeyActionCollection extends CustomerGroupUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerGroupSetKeyAction
     */
    public function at($index);

    /**
     * @return CustomerGroupSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupSetKeyAction
     */
    public function map($data, $index);
}

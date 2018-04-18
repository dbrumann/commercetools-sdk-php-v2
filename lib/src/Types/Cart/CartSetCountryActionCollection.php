<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCountryActionCollection extends CartUpdateActionCollection {
    /**
     * @param $index
     * @return CartSetCountryAction
     */
    public function at($index);

    /**
     * @return CartSetCountryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCountryAction
     */
    public function map($data, $index);
}

<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeIsActiveActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeIsActiveActionCollection {

    /**
     * @param CartDiscountChangeIsActiveAction $value
     * @return CartDiscountChangeIsActiveActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeIsActiveAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeIsActiveAction) {
            $data = $this->mapData(CartDiscountChangeIsActiveAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}

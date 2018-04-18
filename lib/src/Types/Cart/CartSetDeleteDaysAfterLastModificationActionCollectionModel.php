<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetDeleteDaysAfterLastModificationActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetDeleteDaysAfterLastModificationActionCollection {

    /**
     * @param CartSetDeleteDaysAfterLastModificationAction $value
     * @return CartSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetDeleteDaysAfterLastModificationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetDeleteDaysAfterLastModificationAction) {
            $data = $this->mapData(CartSetDeleteDaysAfterLastModificationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}

<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PaymentInfoCollectionModel extends JsonCollection implements PaymentInfoCollection {

    /**
     * @param PaymentInfo $value
     * @return PaymentInfoCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentInfo) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentInfo) {
            $data = $this->mapData(PaymentInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}

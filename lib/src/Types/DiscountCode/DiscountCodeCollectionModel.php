<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\ResourceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeCollectionModel extends ResourceCollectionModel implements DiscountCodeCollection {

    /**
     * @param DiscountCode $value
     * @return DiscountCodeCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCode) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCode
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCode) {
            $data = $this->mapData(DiscountCode::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return DiscountCode
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountResourceIdentifier>
 */
final class CartDiscountResourceIdentifierBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): CartDiscountResourceIdentifier
    {
        return new CartDiscountResourceIdentifierModel(
            $this->id,
            $this->key
        );
    }

    public static function of(): CartDiscountResourceIdentifierBuilder
    {
        return new self();
    }
}

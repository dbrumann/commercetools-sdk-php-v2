<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetPricesActionModel extends JsonObjectModel implements ProductSetPricesAction
{
    public const DISCRIMINATOR_VALUE = 'setPrices';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?PriceDraftCollection
     */
    protected $prices;

    /**
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?string $sku = null,
        ?PriceDraftCollection $prices = null,
        ?bool $staged = null
    ) {
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->prices = $prices;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceDraftCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?PriceDraftCollection $prices
     */
    public function setPrices(?PriceDraftCollection $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}

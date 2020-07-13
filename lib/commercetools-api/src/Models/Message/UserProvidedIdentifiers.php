<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface UserProvidedIdentifiers extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_SKU = 'sku';
    public const FIELD_SLUG = 'slug';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;
}

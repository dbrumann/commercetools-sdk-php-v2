<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_ROLES = 'roles';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * <p>If not specified, then channel will get InventorySupply role by default</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void;
}

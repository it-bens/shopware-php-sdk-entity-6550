<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethodTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;

    public ?string $trackingUrl = null;
}

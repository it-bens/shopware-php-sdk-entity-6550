<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DeliveryTimeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DeliveryTime\DeliveryTimeEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeTranslationEntity extends Entity
{
    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $deliveryTimeId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}

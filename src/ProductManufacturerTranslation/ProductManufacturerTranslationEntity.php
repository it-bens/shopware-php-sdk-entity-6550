<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductManufacturerTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductManufacturer\ProductManufacturerEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?ProductManufacturerEntity $productManufacturer = null;

    public ?string $productManufacturerId = null;

    public ?string $productManufacturerVersionId = null;
}

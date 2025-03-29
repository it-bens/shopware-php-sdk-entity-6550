<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSearchKeyword;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchKeywordEntity extends Entity
{
    public ?string $keyword = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?float $ranking = null;
}

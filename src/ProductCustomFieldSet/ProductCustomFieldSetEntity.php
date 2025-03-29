<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCustomFieldSet;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomFieldSet\CustomFieldSetEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCustomFieldSetEntity extends Entity
{
    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?string $customFieldSetId = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}

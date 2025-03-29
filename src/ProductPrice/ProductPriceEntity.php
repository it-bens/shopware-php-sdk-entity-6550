<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductPrice;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductPriceEntity extends Entity
{
    public ?array $price = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?int $quantityEnd = null;

    public ?int $quantityStart = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Tax;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;
use ITB\ShopwareSdkEntity\TaxRule\TaxRuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxEntity extends Entity
{
    public ?string $name = null;

    public ?int $position = null;

    public ?ProductCollection $products = null;

    public ?TaxRuleCollection $rules = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?float $taxRate = null;
}

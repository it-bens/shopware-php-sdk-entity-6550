<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DeliveryTime;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeEntity extends Entity
{
    public ?int $max = null;

    public ?int $min = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?DeliveryTimeTranslationCollection $translations = null;

    public ?string $unit = null;
}

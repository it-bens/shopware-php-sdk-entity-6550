<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionDiscountPrices;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\PromotionDiscount\PromotionDiscountEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountPricesEntity extends Entity
{
    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?string $discountId = null;

    public ?float $price = null;

    public ?PromotionDiscountEntity $promotionDiscount = null;
}

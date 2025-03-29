<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionDiscount;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;
use ITB\ShopwareSdkEntity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use ITB\ShopwareSdkEntity\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountEntity extends Entity
{
    public ?string $applierKey = null;

    public ?bool $considerAdvancedRules = null;

    public ?RuleCollection $discountRules = null;

    public ?float $maxValue = null;

    public ?string $pickerKey = null;

    public ?PromotionEntity $promotion = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;

    public ?string $promotionId = null;

    public ?string $scope = null;

    public ?string $sorterKey = null;

    public ?string $type = null;

    public ?string $usageKey = null;

    public ?float $value = null;
}

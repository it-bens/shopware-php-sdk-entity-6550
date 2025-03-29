<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethodPrice;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodPriceEntity extends Entity
{
    public ?int $calculation = null;

    public ?RuleEntity $calculationRule = null;

    public ?string $calculationRuleId = null;

    public ?array $currencyPrice = null;

    public ?float $quantityEnd = null;

    public ?float $quantityStart = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;
}

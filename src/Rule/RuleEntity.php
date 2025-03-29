<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Rule;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\FlowSequence\FlowSequenceCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodCollection;
use ITB\ShopwareSdkEntity\ProductPrice\ProductPriceCollection;
use ITB\ShopwareSdkEntity\Promotion\PromotionCollection;
use ITB\ShopwareSdkEntity\PromotionDiscount\PromotionDiscountCollection;
use ITB\ShopwareSdkEntity\PromotionSetgroup\PromotionSetgroupCollection;
use ITB\ShopwareSdkEntity\RuleCondition\RuleConditionCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;
use ITB\ShopwareSdkEntity\ShippingMethodPrice\ShippingMethodPriceCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\TaxProvider\TaxProviderCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleEntity extends Entity
{
    public ?array $areas = null;

    public ?PromotionCollection $cartPromotions = null;

    public ?RuleConditionCollection $conditions = null;

    public ?string $description = null;

    public ?FlowSequenceCollection $flowSequences = null;

    public ?bool $invalid = null;

    public ?array $moduleTypes = null;

    public ?string $name = null;

    public ?PromotionCollection $orderPromotions = null;

    public ?string $payload = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?PromotionCollection $personaPromotions = null;

    public ?int $priority = null;

    public ?ProductPriceCollection $productPrices = null;

    public ?PromotionDiscountCollection $promotionDiscounts = null;

    public ?PromotionSetgroupCollection $promotionSetGroups = null;

    public ?ShippingMethodPriceCollection $shippingMethodPriceCalculations = null;

    public ?ShippingMethodPriceCollection $shippingMethodPrices = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?TagCollection $tags = null;

    public ?TaxProviderCollection $taxProviders = null;
}

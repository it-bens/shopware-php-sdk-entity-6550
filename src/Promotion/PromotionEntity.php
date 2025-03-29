<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Promotion;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemCollection;
use ITB\ShopwareSdkEntity\PromotionDiscount\PromotionDiscountCollection;
use ITB\ShopwareSdkEntity\PromotionIndividualCode\PromotionIndividualCodeCollection;
use ITB\ShopwareSdkEntity\PromotionSalesChannel\PromotionSalesChannelCollection;
use ITB\ShopwareSdkEntity\PromotionSetgroup\PromotionSetgroupCollection;
use ITB\ShopwareSdkEntity\PromotionTranslation\PromotionTranslationCollection;
use ITB\ShopwareSdkEntity\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionEntity extends Entity
{
    public ?bool $active = null;

    public ?RuleCollection $cartRules = null;

    public ?string $code = null;

    public ?bool $customerRestriction = null;

    public ?PromotionDiscountCollection $discounts = null;

    public ?array $exclusionIds = null;

    public ?bool $exclusive = null;

    public ?string $individualCodePattern = null;

    public ?PromotionIndividualCodeCollection $individualCodes = null;

    public ?int $maxRedemptionsGlobal = null;

    public ?int $maxRedemptionsPerCustomer = null;

    public ?string $name = null;

    public ?int $orderCount = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?RuleCollection $orderRules = null;

    public ?array $ordersPerCustomerCount = null;

    public ?CustomerCollection $personaCustomers = null;

    public ?RuleCollection $personaRules = null;

    public ?bool $preventCombination = null;

    public ?int $priority = null;

    public ?PromotionSalesChannelCollection $salesChannels = null;

    public ?PromotionSetgroupCollection $setgroups = null;

    public ?PromotionTranslationCollection $translations = null;

    public ?bool $useCodes = null;

    public ?bool $useIndividualCodes = null;

    public ?bool $useSetGroups = null;

    public ?\DateTimeInterface $validFrom = null;

    public ?\DateTimeInterface $validUntil = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethod;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DeliveryTime\DeliveryTimeEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\OrderDelivery\OrderDeliveryCollection;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\ShippingMethodPrice\ShippingMethodPriceCollection;
use ITB\ShopwareSdkEntity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\Tax\TaxEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodEntity extends Entity
{
    public ?bool $active = null;

    public ?RuleEntity $availabilityRule = null;

    public ?string $availabilityRuleId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $deliveryTimeId = null;

    public ?string $description = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $name = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?int $position = null;

    public ?ShippingMethodPriceCollection $prices = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?TagCollection $tags = null;

    public ?TaxEntity $tax = null;

    public ?string $taxId = null;

    public ?string $taxType = null;

    public ?string $trackingUrl = null;

    public ?ShippingMethodTranslationCollection $translations = null;
}

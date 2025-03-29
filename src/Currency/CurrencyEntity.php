<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Currency;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use ITB\ShopwareSdkEntity\CurrencyTranslation\CurrencyTranslationCollection;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\ProductExport\ProductExportCollection;
use ITB\ShopwareSdkEntity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyEntity extends Entity
{
    public ?CurrencyCountryRoundingCollection $countryRoundings = null;

    public ?float $factor = null;

    public ?string $isoCode = null;

    public ?bool $isSystemDefault = null;

    public ?array $itemRounding = null;

    public ?string $name = null;

    public ?OrderCollection $orders = null;

    public ?int $position = null;

    public ?ProductExportCollection $productExports = null;

    public ?PromotionDiscountPricesCollection $promotionDiscountPrices = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?string $shortName = null;

    public ?string $symbol = null;

    public ?float $taxFreeFrom = null;

    public ?array $totalRounding = null;

    public ?CurrencyTranslationCollection $translations = null;
}

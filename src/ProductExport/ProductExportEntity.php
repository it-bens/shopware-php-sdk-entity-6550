<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductExport;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductExportEntity extends Entity
{
    public ?string $accessKey = null;

    public ?string $bodyTemplate = null;

    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?string $encoding = null;

    public ?string $fileFormat = null;

    public ?string $fileName = null;

    public ?string $footerTemplate = null;

    public ?bool $generateByCronjob = null;

    public ?\DateTimeInterface $generatedAt = null;

    public ?string $headerTemplate = null;

    public ?bool $includeVariants = null;

    public ?int $interval = null;

    public ?bool $isRunning = null;

    public ?bool $pausedSchedule = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?SalesChannelDomainEntity $salesChannelDomain = null;

    public ?string $salesChannelDomainId = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $storefrontSalesChannel = null;

    public ?string $storefrontSalesChannelId = null;
}

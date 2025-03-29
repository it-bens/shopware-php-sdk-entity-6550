<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelDomain;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductExport\ProductExportCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\SnippetSet\SnippetSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelDomainEntity extends Entity
{
    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?bool $hreflangUseOnlyLocale = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?ProductExportCollection $productExports = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?SalesChannelEntity $salesChannelDefaultHreflang = null;

    public ?string $salesChannelId = null;

    public ?SnippetSetEntity $snippetSet = null;

    public ?string $snippetSetId = null;

    public ?string $url = null;
}

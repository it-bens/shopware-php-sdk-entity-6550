<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelCurrency;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCurrencyEntity extends Entity
{
    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}

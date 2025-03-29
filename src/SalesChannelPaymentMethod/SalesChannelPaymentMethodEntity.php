<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelPaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelPaymentMethodEntity extends Entity
{
    public ?PaymentMethodEntity $paymentMethod = null;

    public ?string $paymentMethodId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}

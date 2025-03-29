<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppPaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppPaymentMethodEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $appName = null;

    public ?string $captureUrl = null;

    public ?string $finalizeUrl = null;

    public ?string $identifier = null;

    public ?MediaEntity $originalMedia = null;

    public ?string $originalMediaId = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?string $paymentMethodId = null;

    public ?string $payUrl = null;

    public ?string $recurringUrl = null;

    public ?string $refundUrl = null;

    public ?string $validateUrl = null;
}

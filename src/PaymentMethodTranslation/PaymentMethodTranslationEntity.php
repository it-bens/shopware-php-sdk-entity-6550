<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PaymentMethodTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?string $distinguishableName = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?string $paymentMethodId = null;
}

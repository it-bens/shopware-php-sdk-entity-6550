<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PaymentMethodTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PaymentMethodTranslationEntity>
 */
class PaymentMethodTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PaymentMethodTranslationEntity::class;
    }
}

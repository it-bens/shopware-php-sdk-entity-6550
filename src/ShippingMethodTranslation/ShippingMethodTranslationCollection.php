<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethodTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ShippingMethodTranslationEntity>
 */
class ShippingMethodTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ShippingMethodTranslationEntity::class;
    }
}

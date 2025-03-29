<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DeliveryTimeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<DeliveryTimeTranslationEntity>
 */
class DeliveryTimeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return DeliveryTimeTranslationEntity::class;
    }
}

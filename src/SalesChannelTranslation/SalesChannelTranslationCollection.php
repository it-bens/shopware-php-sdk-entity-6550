<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelTranslationEntity>
 */
class SalesChannelTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelTranslationEntity::class;
    }
}

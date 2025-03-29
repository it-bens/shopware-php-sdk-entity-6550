<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelTypeTranslationEntity>
 */
class SalesChannelTypeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelTypeTranslationEntity::class;
    }
}

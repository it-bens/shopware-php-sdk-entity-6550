<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ThemeSalesChannelEntity>
 */
class ThemeSalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ThemeSalesChannelEntity::class;
    }
}

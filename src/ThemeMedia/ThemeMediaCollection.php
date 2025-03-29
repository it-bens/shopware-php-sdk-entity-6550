<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeMedia;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ThemeMediaEntity>
 */
class ThemeMediaCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ThemeMediaEntity::class;
    }
}

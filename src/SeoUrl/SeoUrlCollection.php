<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SeoUrl;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SeoUrlEntity>
 */
class SeoUrlCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SeoUrlEntity::class;
    }
}

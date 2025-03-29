<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsPage;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CmsPageEntity>
 */
class CmsPageCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CmsPageEntity::class;
    }
}

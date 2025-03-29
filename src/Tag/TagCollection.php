<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Tag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<TagEntity>
 */
class TagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TagEntity::class;
    }
}

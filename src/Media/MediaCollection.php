<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Media;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaEntity>
 */
class MediaCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaEntity::class;
    }
}

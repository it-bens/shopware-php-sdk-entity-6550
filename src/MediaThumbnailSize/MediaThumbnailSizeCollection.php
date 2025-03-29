<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaThumbnailSize;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaThumbnailSizeEntity>
 */
class MediaThumbnailSizeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaThumbnailSizeEntity::class;
    }
}

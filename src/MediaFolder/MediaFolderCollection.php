<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolder;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaFolderEntity>
 */
class MediaFolderCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaFolderEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaDefaultFolder;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaDefaultFolderEntity>
 */
class MediaDefaultFolderCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaDefaultFolderEntity::class;
    }
}

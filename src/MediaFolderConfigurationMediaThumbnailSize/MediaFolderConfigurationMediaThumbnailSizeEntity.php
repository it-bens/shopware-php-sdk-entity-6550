<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolderConfigurationMediaThumbnailSize;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use ITB\ShopwareSdkEntity\MediaThumbnailSize\MediaThumbnailSizeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    public ?MediaFolderConfigurationEntity $mediaFolderConfiguration = null;

    public ?string $mediaFolderConfigurationId = null;

    public ?MediaThumbnailSizeEntity $mediaThumbnailSize = null;

    public ?string $mediaThumbnailSizeId = null;
}

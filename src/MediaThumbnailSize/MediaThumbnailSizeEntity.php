<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaThumbnailSize;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MediaFolderConfiguration\MediaFolderConfigurationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailSizeEntity extends Entity
{
    public ?int $height = null;

    public ?MediaFolderConfigurationCollection $mediaFolderConfigurations = null;

    public ?int $width = null;
}

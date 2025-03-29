<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolderConfiguration;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MediaFolder\MediaFolderCollection;
use ITB\ShopwareSdkEntity\MediaThumbnailSize\MediaThumbnailSizeCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderConfigurationEntity extends Entity
{
    public ?bool $createThumbnails = null;

    public ?bool $keepAspectRatio = null;

    public ?MediaFolderCollection $mediaFolders = null;

    public ?MediaThumbnailSizeCollection $mediaThumbnailSizes = null;

    public ?string $mediaThumbnailSizesRo = null;

    public ?bool $noAssociation = null;

    public ?bool $private = null;

    public ?int $thumbnailQuality = null;
}

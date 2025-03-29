<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolder;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaCollection;
use ITB\ShopwareSdkEntity\MediaDefaultFolder\MediaDefaultFolderEntity;
use ITB\ShopwareSdkEntity\MediaFolderConfiguration\MediaFolderConfigurationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaFolderEntity extends Entity
{
    public ?int $childCount = null;

    public ?MediaFolderCollection $children = null;

    public ?MediaFolderConfigurationEntity $configuration = null;

    public ?string $configurationId = null;

    public ?MediaDefaultFolderEntity $defaultFolder = null;

    public ?string $defaultFolderId = null;

    public ?MediaCollection $media = null;

    public ?string $name = null;

    public ?MediaFolderEntity $parent = null;

    public ?string $parentId = null;

    public ?string $path = null;

    public ?bool $useParentConfiguration = null;
}

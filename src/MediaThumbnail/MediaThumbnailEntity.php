<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaThumbnail;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailEntity extends Entity
{
    public ?int $height = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $url = null;

    public ?int $width = null;
}

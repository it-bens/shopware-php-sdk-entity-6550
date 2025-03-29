<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTagEntity extends Entity
{
    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

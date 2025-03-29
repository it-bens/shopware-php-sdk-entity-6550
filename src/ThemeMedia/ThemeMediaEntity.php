<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeMedia;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeMediaEntity extends Entity
{
    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?ThemeEntity $theme = null;

    public ?string $themeId = null;
}

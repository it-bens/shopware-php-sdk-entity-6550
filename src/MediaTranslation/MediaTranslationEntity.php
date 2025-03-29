<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTranslationEntity extends Entity
{
    public ?string $alt = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $title = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsPageTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageTranslationEntity extends Entity
{
    public ?CmsPageEntity $cmsPage = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}

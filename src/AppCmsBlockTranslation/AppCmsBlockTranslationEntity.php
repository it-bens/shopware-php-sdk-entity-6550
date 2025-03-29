<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppCmsBlockTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppCmsBlock\AppCmsBlockEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppCmsBlockTranslationEntity extends Entity
{
    public ?AppCmsBlockEntity $appCmsBlock = null;

    public ?string $appCmsBlockId = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;
}

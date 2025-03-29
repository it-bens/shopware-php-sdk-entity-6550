<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppActionButtonTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppActionButton\AppActionButtonEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonTranslationEntity extends Entity
{
    public ?AppActionButtonEntity $appActionButton = null;

    public ?string $appActionButtonId = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;
}

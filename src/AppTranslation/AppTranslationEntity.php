<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTranslationEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $description = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $privacyPolicyExtensions = null;
}

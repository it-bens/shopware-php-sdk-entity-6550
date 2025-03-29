<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsSlotTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsSlot\CmsSlotEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotTranslationEntity extends Entity
{
    public ?CmsSlotEntity $cmsSlot = null;

    public ?string $cmsSlotId = null;

    public ?string $cmsSlotVersionId = null;

    public ?array $config = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;
}

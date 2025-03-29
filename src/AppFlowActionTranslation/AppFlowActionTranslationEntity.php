<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppFlowActionTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppFlowAction\AppFlowActionEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowActionTranslationEntity extends Entity
{
    public ?AppFlowActionEntity $appFlowAction = null;

    public ?string $appFlowActionId = null;

    public ?string $description = null;

    public ?string $headline = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;
}

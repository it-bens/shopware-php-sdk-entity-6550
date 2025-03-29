<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\MailTemplateType\MailTemplateTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?string $mailTemplateTypeId = null;

    public ?string $name = null;
}

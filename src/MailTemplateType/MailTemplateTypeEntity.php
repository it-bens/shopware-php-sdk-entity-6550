<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateType;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MailTemplate\MailTemplateCollection;
use ITB\ShopwareSdkEntity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeEntity extends Entity
{
    public ?array $availableEntities = null;

    public ?MailTemplateCollection $mailTemplates = null;

    public ?string $name = null;

    public ?string $technicalName = null;

    public ?array $templateData = null;

    public ?MailTemplateTypeTranslationCollection $translations = null;
}

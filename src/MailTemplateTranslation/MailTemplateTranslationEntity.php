<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\MailTemplate\MailTemplateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTranslationEntity extends Entity
{
    public ?string $contentHtml = null;

    public ?string $contentPlain = null;

    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?string $mailTemplateId = null;

    public ?string $senderName = null;

    public ?string $subject = null;
}

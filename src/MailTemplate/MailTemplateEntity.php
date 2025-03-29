<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplate;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MailTemplateMedia\MailTemplateMediaCollection;
use ITB\ShopwareSdkEntity\MailTemplateTranslation\MailTemplateTranslationCollection;
use ITB\ShopwareSdkEntity\MailTemplateType\MailTemplateTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateEntity extends Entity
{
    public ?string $contentHtml = null;

    public ?string $contentPlain = null;

    public ?string $description = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?string $mailTemplateTypeId = null;

    public ?MailTemplateMediaCollection $media = null;

    public ?string $senderName = null;

    public ?string $subject = null;

    public ?bool $systemDefault = null;

    public ?MailTemplateTranslationCollection $translations = null;
}

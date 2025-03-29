<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateMedia;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MailTemplate\MailTemplateEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateMediaEntity extends Entity
{
    public ?string $languageId = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?string $mailTemplateId = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?int $position = null;
}

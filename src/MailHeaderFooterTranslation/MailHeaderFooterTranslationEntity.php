<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailHeaderFooterTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\MailHeaderFooter\MailHeaderFooterEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailHeaderFooterTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?string $footerHtml = null;

    public ?string $footerPlain = null;

    public ?string $headerHtml = null;

    public ?string $headerPlain = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?MailHeaderFooterEntity $mailHeaderFooter = null;

    public ?string $mailHeaderFooterId = null;

    public ?string $name = null;
}

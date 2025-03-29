<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailHeaderFooter;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailHeaderFooterEntity extends Entity
{
    public ?string $description = null;

    public ?string $footerHtml = null;

    public ?string $footerPlain = null;

    public ?string $headerHtml = null;

    public ?string $headerPlain = null;

    public ?string $name = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?bool $systemDefault = null;

    public ?MailHeaderFooterTranslationCollection $translations = null;
}

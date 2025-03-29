<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelType;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeEntity extends Entity
{
    public ?string $coverUrl = null;

    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?string $iconName = null;

    public ?string $manufacturer = null;

    public ?string $name = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?array $screenshotUrls = null;

    public ?SalesChannelTypeTranslationCollection $translations = null;
}

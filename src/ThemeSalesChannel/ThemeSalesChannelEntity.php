<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeSalesChannelEntity extends Entity
{
    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?ThemeEntity $theme = null;

    public ?string $themeId = null;
}

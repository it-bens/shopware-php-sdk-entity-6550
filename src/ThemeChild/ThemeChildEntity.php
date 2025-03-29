<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeChild;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeChildEntity extends Entity
{
    public ?string $childId = null;

    public ?ThemeEntity $childTheme = null;

    public ?string $parentId = null;

    public ?ThemeEntity $parentTheme = null;
}

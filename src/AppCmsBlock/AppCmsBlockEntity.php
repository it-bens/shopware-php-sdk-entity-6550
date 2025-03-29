<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppCmsBlock;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppCmsBlockEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?array $block = null;

    public ?string $label = null;

    public ?string $name = null;

    public ?string $styles = null;

    public ?string $template = null;

    public ?AppCmsBlockTranslationCollection $translations = null;
}

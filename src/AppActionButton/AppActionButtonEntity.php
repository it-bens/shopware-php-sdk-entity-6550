<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppActionButton;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\AppActionButtonTranslation\AppActionButtonTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonEntity extends Entity
{
    public ?string $action = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $entity = null;

    public ?string $label = null;

    public ?AppActionButtonTranslationCollection $translations = null;

    public ?string $url = null;

    public ?string $view = null;
}

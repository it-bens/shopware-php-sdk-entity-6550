<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsSlot;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsBlock\CmsBlockEntity;
use ITB\ShopwareSdkEntity\CmsSlotTranslation\CmsSlotTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotEntity extends Entity
{
    public ?CmsBlockEntity $block = null;

    public ?string $blockId = null;

    public ?string $cmsBlockVersionId = null;

    public ?array $config = null;

    public ?array $data = null;

    public ?array $fieldConfig = null;

    public ?bool $locked = null;

    public ?string $slot = null;

    public ?CmsSlotTranslationCollection $translations = null;

    public ?string $type = null;
}

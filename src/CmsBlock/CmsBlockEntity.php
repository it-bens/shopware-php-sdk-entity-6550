<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsBlock;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsSection\CmsSectionEntity;
use ITB\ShopwareSdkEntity\CmsSlot\CmsSlotCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsBlockEntity extends Entity
{
    public ?string $backgroundColor = null;

    public ?MediaEntity $backgroundMedia = null;

    public ?string $backgroundMediaId = null;

    public ?string $backgroundMediaMode = null;

    public ?string $cmsSectionVersionId = null;

    public ?string $cssClass = null;

    public ?bool $locked = null;

    public ?string $marginBottom = null;

    public ?string $marginLeft = null;

    public ?string $marginRight = null;

    public ?string $marginTop = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?CmsSectionEntity $section = null;

    public ?string $sectionId = null;

    public ?string $sectionPosition = null;

    public ?CmsSlotCollection $slots = null;

    public ?string $type = null;

    public ?array $visibility = null;
}

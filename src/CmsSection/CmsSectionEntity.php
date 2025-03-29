<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsSection;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsBlock\CmsBlockCollection;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSectionEntity extends Entity
{
    public ?string $backgroundColor = null;

    public ?MediaEntity $backgroundMedia = null;

    public ?string $backgroundMediaId = null;

    public ?string $backgroundMediaMode = null;

    public ?CmsBlockCollection $blocks = null;

    public ?string $cmsPageVersionId = null;

    public ?string $cssClass = null;

    public ?bool $locked = null;

    public ?string $mobileBehavior = null;

    public ?string $name = null;

    public ?CmsPageEntity $page = null;

    public ?string $pageId = null;

    public ?int $position = null;

    public ?string $sizingMode = null;

    public ?string $type = null;

    public ?array $visibility = null;
}

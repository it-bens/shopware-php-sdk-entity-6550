<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CategoryTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTagEntity extends Entity
{
    public ?CategoryEntity $category = null;

    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

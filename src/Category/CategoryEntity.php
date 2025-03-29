<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Category;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CategoryTranslation\CategoryTranslationCollection;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\MainCategory\MainCategoryCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\SeoUrl\SeoUrlCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryEntity extends Entity
{
    public ?bool $active = null;

    public ?string $afterCategoryId = null;

    public ?string $afterCategoryVersionId = null;

    public ?int $autoIncrement = null;

    public ?array $breadcrumb = null;

    public ?int $childCount = null;

    public ?CategoryCollection $children = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?string $cmsPageId = null;

    public ?bool $cmsPageIdSwitched = null;

    public ?string $cmsPageVersionId = null;

    public ?string $customEntityTypeId = null;

    public ?string $description = null;

    public ?bool $displayNestedProducts = null;

    public ?string $externalLink = null;

    public ?SalesChannelCollection $footerSalesChannels = null;

    public ?string $internalLink = null;

    public ?string $keywords = null;

    public ?int $level = null;

    public ?bool $linkNewTab = null;

    public ?string $linkType = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?string $name = null;

    public ?SalesChannelCollection $navigationSalesChannels = null;

    public ?ProductCollection $nestedProducts = null;

    public ?CategoryEntity $parent = null;

    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?string $path = null;

    public ?string $productAssignmentType = null;

    public ?ProductCollection $products = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?SalesChannelCollection $serviceSalesChannels = null;

    public ?array $slotConfig = null;

    public ?TagCollection $tags = null;

    public ?CategoryTranslationCollection $translations = null;

    public ?string $type = null;

    public ?bool $visible = null;

    public ?int $visibleChildCount = null;
}

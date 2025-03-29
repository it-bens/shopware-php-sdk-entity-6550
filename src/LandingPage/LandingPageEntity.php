<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPage;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\LandingPageTranslation\LandingPageTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\SeoUrl\SeoUrlCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageEntity extends Entity
{
    public ?bool $active = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?string $keywords = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?string $name = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?array $slotConfig = null;

    public ?TagCollection $tags = null;

    public ?LandingPageTranslationCollection $translations = null;

    public ?string $url = null;
}

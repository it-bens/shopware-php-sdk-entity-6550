<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsPage;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryCollection;
use ITB\ShopwareSdkEntity\CmsPageTranslation\CmsPageTranslationCollection;
use ITB\ShopwareSdkEntity\CmsSection\CmsSectionCollection;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageEntity extends Entity
{
    public ?CategoryCollection $categories = null;

    public ?array $config = null;

    public ?string $cssClass = null;

    public ?string $entity = null;

    public ?SalesChannelCollection $homeSalesChannels = null;

    public ?LandingPageCollection $landingPages = null;

    public ?bool $locked = null;

    public ?string $name = null;

    public ?MediaEntity $previewMedia = null;

    public ?string $previewMediaId = null;

    public ?ProductCollection $products = null;

    public ?CmsSectionCollection $sections = null;

    public ?CmsPageTranslationCollection $translations = null;

    public ?string $type = null;
}

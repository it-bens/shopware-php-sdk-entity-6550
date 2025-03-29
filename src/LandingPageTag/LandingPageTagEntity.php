<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPageTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTagEntity extends Entity
{
    public ?LandingPageEntity $landingPage = null;

    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

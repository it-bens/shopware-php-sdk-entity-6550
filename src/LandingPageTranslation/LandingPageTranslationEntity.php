<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPageTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTranslationEntity extends Entity
{
    public ?string $keywords = null;

    public ?LandingPageEntity $landingPage = null;

    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?string $name = null;

    public ?array $slotConfig = null;

    public ?string $url = null;
}

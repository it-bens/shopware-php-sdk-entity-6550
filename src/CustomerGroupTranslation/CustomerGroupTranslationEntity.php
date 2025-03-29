<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerGroupTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomerGroup\CustomerGroupEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupTranslationEntity extends Entity
{
    public ?CustomerGroupEntity $customerGroup = null;

    public ?string $customerGroupId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?string $registrationIntroduction = null;

    public ?bool $registrationOnlyCompanyRegistration = null;

    public ?string $registrationSeoMetaDescription = null;

    public ?string $registrationTitle = null;
}

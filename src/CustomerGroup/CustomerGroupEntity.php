<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerGroup;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupEntity extends Entity
{
    public ?CustomerCollection $customers = null;

    public ?bool $displayGross = null;

    public ?string $name = null;

    public ?bool $registrationActive = null;

    public ?string $registrationIntroduction = null;

    public ?bool $registrationOnlyCompanyRegistration = null;

    public ?SalesChannelCollection $registrationSalesChannels = null;

    public ?string $registrationSeoMetaDescription = null;

    public ?string $registrationTitle = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?CustomerGroupTranslationCollection $translations = null;
}

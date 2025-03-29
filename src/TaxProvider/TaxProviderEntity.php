<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxProvider;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;
use ITB\ShopwareSdkEntity\TaxProviderTranslation\TaxProviderTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxProviderEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?RuleEntity $availabilityRule = null;

    public ?string $availabilityRuleId = null;

    public ?string $identifier = null;

    public ?string $name = null;

    public ?int $priority = null;

    public ?string $processUrl = null;

    public ?TaxProviderTranslationCollection $translations = null;
}

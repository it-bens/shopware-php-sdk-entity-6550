<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxRule;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\Tax\TaxEntity;
use ITB\ShopwareSdkEntity\TaxRuleType\TaxRuleTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleEntity extends Entity
{
    public ?\DateTimeInterface $activeFrom = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?array $data = null;

    public ?TaxEntity $tax = null;

    public ?string $taxId = null;

    public ?float $taxRate = null;

    public ?string $taxRuleTypeId = null;

    public ?TaxRuleTypeEntity $type = null;
}

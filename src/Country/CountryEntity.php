<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Country;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CountryState\CountryStateCollection;
use ITB\ShopwareSdkEntity\CountryTranslation\CountryTranslationCollection;
use ITB\ShopwareSdkEntity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use ITB\ShopwareSdkEntity\CustomerAddress\CustomerAddressCollection;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\TaxRule\TaxRuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryEntity extends Entity
{
    public ?bool $active = null;

    public ?array $addressFormat = null;

    public ?string $advancedPostalCodePattern = null;

    public ?bool $checkAdvancedPostalCodePattern = null;

    public ?bool $checkPostalCodePattern = null;

    public ?bool $checkVatIdPattern = null;

    public ?array $companyTax = null;

    public ?CurrencyCountryRoundingCollection $currencyCountryRoundings = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?array $customerTax = null;

    public ?string $defaultPostalCodePattern = null;

    public ?bool $displayStateInRegistration = null;

    public ?bool $forceStateInRegistration = null;

    public ?string $iso = null;

    public ?string $iso3 = null;

    public ?string $name = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?int $position = null;

    public ?bool $postalCodeRequired = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?bool $shippingAvailable = null;

    public ?CountryStateCollection $states = null;

    public ?TaxRuleCollection $taxRules = null;

    public ?CountryTranslationCollection $translations = null;

    public ?string $vatIdPattern = null;

    public ?bool $vatIdRequired = null;
}

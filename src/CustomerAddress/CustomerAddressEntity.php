<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerAddress;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\CountryState\CountryStateEntity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerAddressEntity extends Entity
{
    public ?string $additionalAddressLine1 = null;

    public ?string $additionalAddressLine2 = null;

    public ?string $city = null;

    public ?string $company = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?CountryStateEntity $countryState = null;

    public ?string $countryStateId = null;

    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?string $department = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $phoneNumber = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;

    public ?string $street = null;

    public ?string $title = null;

    public ?string $zipcode = null;
}

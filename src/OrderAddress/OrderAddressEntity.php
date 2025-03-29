<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderAddress;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\CountryState\CountryStateEntity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\OrderDelivery\OrderDeliveryCollection;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderAddressEntity extends Entity
{
    public ?string $additionalAddressLine1 = null;

    public ?string $additionalAddressLine2 = null;

    public ?string $city = null;

    public ?string $company = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?CountryStateEntity $countryState = null;

    public ?string $countryStateId = null;

    public ?string $department = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?OrderEntity $order = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $phoneNumber = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;

    public ?string $street = null;

    public ?string $title = null;

    public ?string $vatId = null;

    public ?string $zipcode = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderCustomer;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderCustomerEntity extends Entity
{
    public ?string $company = null;

    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?string $customerNumber = null;

    public ?string $email = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?OrderEntity $order = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?string $remoteAddress = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;

    public ?string $title = null;

    public ?array $vatIds = null;
}

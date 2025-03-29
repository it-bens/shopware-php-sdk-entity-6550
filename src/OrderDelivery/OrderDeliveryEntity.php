<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderDelivery;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressEntity;
use ITB\ShopwareSdkEntity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryEntity extends Entity
{
    public ?OrderEntity $order = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?OrderDeliveryPositionCollection $positions = null;

    public ?array $shippingCosts = null;

    public ?\DateTimeInterface $shippingDateEarliest = null;

    public ?\DateTimeInterface $shippingDateLatest = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;

    public ?OrderAddressEntity $shippingOrderAddress = null;

    public ?string $shippingOrderAddressId = null;

    public ?string $shippingOrderAddressVersionId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?array $trackingCodes = null;
}

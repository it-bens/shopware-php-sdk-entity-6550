<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderDeliveryPosition;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\OrderDelivery\OrderDeliveryEntity;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryPositionEntity extends Entity
{
    public ?OrderDeliveryEntity $orderDelivery = null;

    public ?string $orderDeliveryId = null;

    public ?string $orderDeliveryVersionId = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?array $price = null;

    public ?int $quantity = null;

    public ?float $totalPrice = null;

    public ?float $unitPrice = null;
}

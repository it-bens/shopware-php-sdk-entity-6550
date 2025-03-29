<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransactionCaptureRefundPosition;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemEntity;
use ITB\ShopwareSdkEntity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundPositionEntity extends Entity
{
    public ?array $amount = null;

    public ?string $externalReference = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?OrderTransactionCaptureRefundEntity $orderTransactionCaptureRefund = null;

    public ?int $quantity = null;

    public ?string $reason = null;

    public ?string $refundId = null;

    public ?string $refundVersionId = null;
}

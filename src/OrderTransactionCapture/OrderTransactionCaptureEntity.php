<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransactionCapture;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\OrderTransaction\OrderTransactionEntity;
use ITB\ShopwareSdkEntity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureEntity extends Entity
{
    public ?array $amount = null;

    public ?string $externalReference = null;

    public ?string $orderTransactionId = null;

    public ?string $orderTransactionVersionId = null;

    public ?OrderTransactionCaptureRefundCollection $refunds = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionEntity $transaction = null;
}

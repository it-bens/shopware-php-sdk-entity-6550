<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransactionCaptureRefund;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\OrderTransactionCapture\OrderTransactionCaptureEntity;
use ITB\ShopwareSdkEntity\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionCaptureRefundEntity extends Entity
{
    public ?array $amount = null;

    public ?string $captureId = null;

    public ?string $captureVersionId = null;

    public ?string $externalReference = null;

    public ?OrderTransactionCaptureRefundPositionCollection $positions = null;

    public ?string $reason = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?OrderTransactionCaptureEntity $transactionCapture = null;
}

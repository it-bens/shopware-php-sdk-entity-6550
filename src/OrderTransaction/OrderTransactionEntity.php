<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransaction;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionEntity extends Entity
{
    public ?array $amount = null;

    public ?OrderTransactionCaptureCollection $captures = null;

    public ?OrderEntity $order = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?string $paymentMethodId = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;
}

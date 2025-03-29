<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineState;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\OrderDelivery\OrderDeliveryCollection;
use ITB\ShopwareSdkEntity\OrderTransaction\OrderTransactionCollection;
use ITB\ShopwareSdkEntity\OrderTransactionCapture\OrderTransactionCaptureCollection;
use ITB\ShopwareSdkEntity\OrderTransactionCaptureRefund\OrderTransactionCaptureRefundCollection;
use ITB\ShopwareSdkEntity\StateMachine\StateMachineEntity;
use ITB\ShopwareSdkEntity\StateMachineHistory\StateMachineHistoryCollection;
use ITB\ShopwareSdkEntity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use ITB\ShopwareSdkEntity\StateMachineTransition\StateMachineTransitionCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateEntity extends Entity
{
    public ?StateMachineHistoryCollection $fromStateMachineHistoryEntries = null;

    public ?StateMachineTransitionCollection $fromStateMachineTransitions = null;

    public ?string $name = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?OrderCollection $orders = null;

    public ?OrderTransactionCaptureRefundCollection $orderTransactionCaptureRefunds = null;

    public ?OrderTransactionCaptureCollection $orderTransactionCaptures = null;

    public ?OrderTransactionCollection $orderTransactions = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $stateMachineId = null;

    public ?string $technicalName = null;

    public ?StateMachineHistoryCollection $toStateMachineHistoryEntries = null;

    public ?StateMachineTransitionCollection $toStateMachineTransitions = null;

    public ?StateMachineStateTranslationCollection $translations = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineTransition;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\StateMachine\StateMachineEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTransitionEntity extends Entity
{
    public ?string $actionName = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $stateMachineId = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;
}

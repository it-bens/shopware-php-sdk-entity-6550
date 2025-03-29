<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineHistory;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\StateMachine\StateMachineEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineHistoryEntity extends Entity
{
    public ?array $entityId = null;

    public ?string $entityName = null;

    public ?string $fromStateId = null;

    public ?StateMachineStateEntity $fromStateMachineState = null;

    public ?string $referencedId = null;

    public ?string $referencedVersionId = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $stateMachineId = null;

    public ?string $toStateId = null;

    public ?StateMachineStateEntity $toStateMachineState = null;

    public ?string $transitionActionName = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;
}

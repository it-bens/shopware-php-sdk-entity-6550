<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachine;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\StateMachineHistory\StateMachineHistoryCollection;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateCollection;
use ITB\ShopwareSdkEntity\StateMachineTransition\StateMachineTransitionCollection;
use ITB\ShopwareSdkEntity\StateMachineTranslation\StateMachineTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineEntity extends Entity
{
    public ?StateMachineHistoryCollection $historyEntries = null;

    public ?string $initialStateId = null;

    public ?string $name = null;

    public ?StateMachineStateCollection $states = null;

    public ?string $technicalName = null;

    public ?StateMachineTransitionCollection $transitions = null;

    public ?StateMachineTranslationCollection $translations = null;
}

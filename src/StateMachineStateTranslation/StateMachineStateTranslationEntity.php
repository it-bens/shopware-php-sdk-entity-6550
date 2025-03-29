<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineStateTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineStateTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?string $stateMachineStateId = null;
}

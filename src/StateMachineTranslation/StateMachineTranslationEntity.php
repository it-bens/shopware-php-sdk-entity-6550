<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\StateMachine\StateMachineEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?StateMachineEntity $stateMachine = null;

    public ?string $stateMachineId = null;
}

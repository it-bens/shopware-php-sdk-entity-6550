<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineStateTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<StateMachineStateTranslationEntity>
 */
class StateMachineStateTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineStateTranslationEntity::class;
    }
}

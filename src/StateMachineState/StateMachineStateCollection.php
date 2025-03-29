<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineState;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<StateMachineStateEntity>
 */
class StateMachineStateCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineStateEntity::class;
    }
}

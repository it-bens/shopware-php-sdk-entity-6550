<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineTransition;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<StateMachineTransitionEntity>
 */
class StateMachineTransitionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineTransitionEntity::class;
    }
}

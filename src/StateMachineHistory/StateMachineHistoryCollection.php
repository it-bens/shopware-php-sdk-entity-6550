<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\StateMachineHistory;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<StateMachineHistoryEntity>
 */
class StateMachineHistoryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return StateMachineHistoryEntity::class;
    }
}

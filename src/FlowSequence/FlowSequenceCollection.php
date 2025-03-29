<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\FlowSequence;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<FlowSequenceEntity>
 */
class FlowSequenceCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return FlowSequenceEntity::class;
    }
}

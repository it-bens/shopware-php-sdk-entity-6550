<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Rule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<RuleEntity>
 */
class RuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return RuleEntity::class;
    }
}

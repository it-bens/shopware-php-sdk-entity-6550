<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\RuleCondition;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<RuleConditionEntity>
 */
class RuleConditionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return RuleConditionEntity::class;
    }
}

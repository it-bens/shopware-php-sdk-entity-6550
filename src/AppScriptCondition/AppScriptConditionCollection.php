<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppScriptCondition;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppScriptConditionEntity>
 */
class AppScriptConditionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppScriptConditionEntity::class;
    }
}

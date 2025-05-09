<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionOrderRule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionOrderRuleEntity>
 */
class PromotionOrderRuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionOrderRuleEntity::class;
    }
}

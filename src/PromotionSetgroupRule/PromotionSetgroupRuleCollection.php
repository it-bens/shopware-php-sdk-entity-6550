<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSetgroupRule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionSetgroupRuleEntity>
 */
class PromotionSetgroupRuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionSetgroupRuleEntity::class;
    }
}

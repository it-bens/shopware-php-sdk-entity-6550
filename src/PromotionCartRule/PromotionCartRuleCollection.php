<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionCartRule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionCartRuleEntity>
 */
class PromotionCartRuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionCartRuleEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionDiscountRule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionDiscountRuleEntity>
 */
class PromotionDiscountRuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionDiscountRuleEntity::class;
    }
}

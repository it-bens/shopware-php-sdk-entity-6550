<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionDiscount;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionDiscountEntity>
 */
class PromotionDiscountCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionDiscountEntity::class;
    }
}

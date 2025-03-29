<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Promotion;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionEntity>
 */
class PromotionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionIndividualCode;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionIndividualCodeEntity>
 */
class PromotionIndividualCodeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionIndividualCodeEntity::class;
    }
}

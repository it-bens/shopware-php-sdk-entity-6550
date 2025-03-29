<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionTranslationEntity>
 */
class PromotionTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionTranslationEntity::class;
    }
}

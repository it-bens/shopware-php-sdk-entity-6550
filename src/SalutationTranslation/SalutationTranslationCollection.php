<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalutationTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalutationTranslationEntity>
 */
class SalutationTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalutationTranslationEntity::class;
    }
}

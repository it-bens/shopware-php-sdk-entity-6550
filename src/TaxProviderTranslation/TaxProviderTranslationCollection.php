<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxProviderTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<TaxProviderTranslationEntity>
 */
class TaxProviderTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TaxProviderTranslationEntity::class;
    }
}

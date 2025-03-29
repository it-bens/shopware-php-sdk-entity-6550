<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Language;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<LanguageEntity>
 */
class LanguageCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return LanguageEntity::class;
    }
}

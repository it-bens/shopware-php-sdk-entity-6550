<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CategoryTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CategoryTranslationEntity>
 */
class CategoryTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CategoryTranslationEntity::class;
    }
}

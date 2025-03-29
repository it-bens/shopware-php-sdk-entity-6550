<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomFieldSetRelation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomFieldSetRelationEntity>
 */
class CustomFieldSetRelationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomFieldSetRelationEntity::class;
    }
}

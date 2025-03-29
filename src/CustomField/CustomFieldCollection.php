<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomField;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomFieldEntity>
 */
class CustomFieldCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomFieldEntity::class;
    }
}

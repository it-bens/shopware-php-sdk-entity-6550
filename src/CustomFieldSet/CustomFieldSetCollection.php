<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomFieldSet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomFieldSetEntity>
 */
class CustomFieldSetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomFieldSetEntity::class;
    }
}

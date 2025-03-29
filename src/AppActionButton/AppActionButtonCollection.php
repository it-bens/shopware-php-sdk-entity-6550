<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppActionButton;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppActionButtonEntity>
 */
class AppActionButtonCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppActionButtonEntity::class;
    }
}

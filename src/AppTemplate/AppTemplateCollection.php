<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppTemplate;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppTemplateEntity>
 */
class AppTemplateCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppTemplateEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SeoUrlTemplate;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SeoUrlTemplateEntity>
 */
class SeoUrlTemplateCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SeoUrlTemplateEntity::class;
    }
}

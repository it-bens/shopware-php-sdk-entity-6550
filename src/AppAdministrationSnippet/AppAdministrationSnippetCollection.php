<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppAdministrationSnippet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppAdministrationSnippetEntity>
 */
class AppAdministrationSnippetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppAdministrationSnippetEntity::class;
    }
}

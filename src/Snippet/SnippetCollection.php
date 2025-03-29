<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Snippet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SnippetEntity>
 */
class SnippetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SnippetEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SnippetSet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SnippetSetEntity>
 */
class SnippetSetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SnippetSetEntity::class;
    }
}

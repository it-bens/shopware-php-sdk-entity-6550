<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Document;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<DocumentEntity>
 */
class DocumentCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return DocumentEntity::class;
    }
}

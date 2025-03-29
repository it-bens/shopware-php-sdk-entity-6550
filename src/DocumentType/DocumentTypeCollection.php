<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentType;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<DocumentTypeEntity>
 */
class DocumentTypeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return DocumentTypeEntity::class;
    }
}

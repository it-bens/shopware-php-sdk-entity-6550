<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<DocumentTypeTranslationEntity>
 */
class DocumentTypeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return DocumentTypeTranslationEntity::class;
    }
}

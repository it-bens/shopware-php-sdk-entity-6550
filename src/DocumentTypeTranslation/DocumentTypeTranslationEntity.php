<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DocumentType\DocumentTypeEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeTranslationEntity extends Entity
{
    public ?DocumentTypeEntity $documentType = null;

    public ?string $documentTypeId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}

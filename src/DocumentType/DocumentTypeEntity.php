<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentType;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Document\DocumentCollection;
use ITB\ShopwareSdkEntity\DocumentBaseConfig\DocumentBaseConfigCollection;
use ITB\ShopwareSdkEntity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use ITB\ShopwareSdkEntity\DocumentTypeTranslation\DocumentTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeEntity extends Entity
{
    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;

    public ?DocumentCollection $documents = null;

    public ?string $name = null;

    public ?string $technicalName = null;

    public ?DocumentTypeTranslationCollection $translations = null;
}

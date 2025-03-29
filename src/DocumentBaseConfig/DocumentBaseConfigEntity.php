<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentBaseConfig;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use ITB\ShopwareSdkEntity\DocumentType\DocumentTypeEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigEntity extends Entity
{
    public ?array $config = null;

    public ?string $documentNumber = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?string $documentTypeId = null;

    public ?string $filenamePrefix = null;

    public ?string $filenameSuffix = null;

    public ?bool $global = null;

    public ?MediaEntity $logo = null;

    public ?string $logoId = null;

    public ?string $name = null;

    public ?DocumentBaseConfigSalesChannelCollection $salesChannels = null;
}

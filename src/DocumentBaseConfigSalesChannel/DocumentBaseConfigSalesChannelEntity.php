<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DocumentBaseConfigSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DocumentBaseConfig\DocumentBaseConfigEntity;
use ITB\ShopwareSdkEntity\DocumentType\DocumentTypeEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentBaseConfigSalesChannelEntity extends Entity
{
    public ?DocumentBaseConfigEntity $documentBaseConfig = null;

    public ?string $documentBaseConfigId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?string $documentTypeId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}

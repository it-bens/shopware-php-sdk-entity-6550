<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Document;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\DocumentType\DocumentTypeEntity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentEntity extends Entity
{
    public ?array $config = null;

    public ?string $deepLinkCode = null;

    public ?DocumentCollection $dependentDocuments = null;

    public ?MediaEntity $documentMediaFile = null;

    public ?string $documentMediaFileId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?string $documentTypeId = null;

    public ?string $fileType = null;

    public ?OrderEntity $order = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?DocumentEntity $referencedDocument = null;

    public ?string $referencedDocumentId = null;

    public ?bool $sent = null;

    public ?bool $static = null;
}

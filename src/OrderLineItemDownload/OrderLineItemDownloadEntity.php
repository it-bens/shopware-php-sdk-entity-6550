<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderLineItemDownload;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderLineItemDownloadEntity extends Entity
{
    public ?bool $accessGranted = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?int $position = null;
}

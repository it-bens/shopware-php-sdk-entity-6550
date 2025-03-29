<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTagEntity extends Entity
{
    public ?OrderEntity $order = null;

    public ?string $orderId = null;

    public ?string $orderVersionId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

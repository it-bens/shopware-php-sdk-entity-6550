<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethodTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTagEntity extends Entity
{
    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

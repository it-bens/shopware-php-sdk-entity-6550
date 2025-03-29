<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerTagEntity extends Entity
{
    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

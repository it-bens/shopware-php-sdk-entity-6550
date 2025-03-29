<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerWishlist;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistEntity extends Entity
{
    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?CustomerWishlistProductCollection $products = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}

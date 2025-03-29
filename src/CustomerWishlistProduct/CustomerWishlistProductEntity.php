<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerWishlistProduct;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomerWishlist\CustomerWishlistEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistProductEntity extends Entity
{
    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?CustomerWishlistEntity $wishlist = null;

    public ?string $wishlistId = null;
}

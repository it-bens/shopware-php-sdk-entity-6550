<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductReview;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductReviewEntity>
 */
class ProductReviewCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductReviewEntity::class;
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductReview;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductReviewEntity extends Entity
{
    public ?string $comment = null;

    public ?string $content = null;

    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?string $externalEmail = null;

    public ?string $externalUser = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?float $points = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?bool $status = null;

    public ?string $title = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderLineItem;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Order\OrderEntity;
use ITB\ShopwareSdkEntity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use ITB\ShopwareSdkEntity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use ITB\ShopwareSdkEntity\OrderTransactionCaptureRefundPosition\OrderTransactionCaptureRefundPositionCollection;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderLineItemEntity extends Entity
{
    public ?OrderLineItemCollection $children = null;

    public ?MediaEntity $cover = null;

    public ?string $coverId = null;

    public ?string $description = null;

    public ?OrderLineItemDownloadCollection $downloads = null;

    public ?bool $good = null;

    public ?string $identifier = null;

    public ?string $label = null;

    public ?OrderEntity $order = null;

    public ?OrderDeliveryPositionCollection $orderDeliveryPositions = null;

    public ?string $orderId = null;

    public ?OrderTransactionCaptureRefundPositionCollection $orderTransactionCaptureRefundPositions = null;

    public ?string $orderVersionId = null;

    public ?OrderLineItemEntity $parent = null;

    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?array $payload = null;

    public ?int $position = null;

    public ?array $price = null;

    public ?array $priceDefinition = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;

    public ?int $quantity = null;

    public ?string $referencedId = null;

    public ?bool $removable = null;

    public ?bool $stackable = null;

    public ?array $states = null;

    public ?float $totalPrice = null;

    public ?string $type = null;

    public ?float $unitPrice = null;
}

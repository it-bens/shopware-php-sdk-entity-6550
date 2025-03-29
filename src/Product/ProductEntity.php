<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Product;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryCollection;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use ITB\ShopwareSdkEntity\CustomFieldSet\CustomFieldSetCollection;
use ITB\ShopwareSdkEntity\DeliveryTime\DeliveryTimeEntity;
use ITB\ShopwareSdkEntity\MainCategory\MainCategoryCollection;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemCollection;
use ITB\ShopwareSdkEntity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use ITB\ShopwareSdkEntity\ProductCrossSelling\ProductCrossSellingCollection;
use ITB\ShopwareSdkEntity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use ITB\ShopwareSdkEntity\ProductDownload\ProductDownloadCollection;
use ITB\ShopwareSdkEntity\ProductFeatureSet\ProductFeatureSetEntity;
use ITB\ShopwareSdkEntity\ProductManufacturer\ProductManufacturerEntity;
use ITB\ShopwareSdkEntity\ProductMedia\ProductMediaCollection;
use ITB\ShopwareSdkEntity\ProductMedia\ProductMediaEntity;
use ITB\ShopwareSdkEntity\ProductPrice\ProductPriceCollection;
use ITB\ShopwareSdkEntity\ProductReview\ProductReviewCollection;
use ITB\ShopwareSdkEntity\ProductSearchKeyword\ProductSearchKeywordCollection;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamCollection;
use ITB\ShopwareSdkEntity\ProductTranslation\ProductTranslationCollection;
use ITB\ShopwareSdkEntity\ProductVisibility\ProductVisibilityCollection;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionCollection;
use ITB\ShopwareSdkEntity\SeoUrl\SeoUrlCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\Tax\TaxEntity;
use ITB\ShopwareSdkEntity\Unit\UnitEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductEntity extends Entity
{
    public ?bool $active = null;

    public ?int $autoIncrement = null;

    public ?bool $available = null;

    public ?int $availableStock = null;

    public ?ProductEntity $canonicalProduct = null;

    public ?string $canonicalProductId = null;

    public ?CategoryCollection $categories = null;

    public ?CategoryCollection $categoriesRo = null;

    public ?array $categoryIds = null;

    public ?array $categoryTree = null;

    public ?int $childCount = null;

    public ?ProductCollection $children = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?string $cmsPageId = null;

    public ?string $cmsPageVersionId = null;

    public ?ProductConfiguratorSettingCollection $configuratorSettings = null;

    public ?ProductMediaEntity $cover = null;

    public ?string $coverId = null;

    public ?ProductCrossSellingAssignedProductsCollection $crossSellingAssignedProducts = null;

    public ?ProductCrossSellingCollection $crossSellings = null;

    public ?CustomFieldSetCollection $customFieldSets = null;

    public ?bool $customFieldSetSelectionActive = null;

    public ?array $customSearchKeywords = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $deliveryTimeId = null;

    public ?string $description = null;

    public ?string $displayGroup = null;

    public ?ProductDownloadCollection $downloads = null;

    public ?string $ean = null;

    public ?ProductFeatureSetEntity $featureSet = null;

    public ?string $featureSetId = null;

    public ?float $height = null;

    public ?bool $isCloseout = null;

    public ?string $keywords = null;

    public ?float $length = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?ProductManufacturerEntity $manufacturer = null;

    public ?string $manufacturerId = null;

    public ?string $manufacturerNumber = null;

    public ?bool $markAsTopseller = null;

    public ?int $maxPurchase = null;

    public ?ProductMediaCollection $media = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?int $minPurchase = null;

    public ?string $name = null;

    public ?array $optionIds = null;

    public ?PropertyGroupOptionCollection $options = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?string $packUnit = null;

    public ?string $packUnitPlural = null;

    public ?ProductEntity $parent = null;

    public ?string $parentId = null;

    public ?string $parentVersionId = null;

    public ?array $price = null;

    public ?ProductPriceCollection $prices = null;

    public ?string $productManufacturerVersionId = null;

    public ?string $productMediaVersionId = null;

    public ?string $productNumber = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?PropertyGroupOptionCollection $properties = null;

    public ?array $propertyIds = null;

    public ?array $purchasePrices = null;

    public ?int $purchaseSteps = null;

    public ?float $purchaseUnit = null;

    public ?float $ratingAverage = null;

    public ?float $referenceUnit = null;

    public ?\DateTimeInterface $releaseDate = null;

    public ?int $restockTime = null;

    public ?int $sales = null;

    public ?ProductSearchKeywordCollection $searchKeywords = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?bool $shippingFree = null;

    public ?array $slotConfig = null;

    public ?array $states = null;

    public ?int $stock = null;

    public ?array $streamIds = null;

    public ?ProductStreamCollection $streams = null;

    public ?array $tagIds = null;

    public ?TagCollection $tags = null;

    public ?TaxEntity $tax = null;

    public ?string $taxId = null;

    public ?ProductTranslationCollection $translations = null;

    public ?UnitEntity $unit = null;

    public ?string $unitId = null;

    public ?array $variantListingConfig = null;

    public ?array $variantRestrictions = null;

    public ?array $variation = null;

    public ?ProductVisibilityCollection $visibilities = null;

    public ?float $weight = null;

    public ?float $width = null;

    public ?CustomerWishlistProductCollection $wishlists = null;
}

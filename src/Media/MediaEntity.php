<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Media;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppPaymentMethod\AppPaymentMethodCollection;
use ITB\ShopwareSdkEntity\Category\CategoryCollection;
use ITB\ShopwareSdkEntity\CmsBlock\CmsBlockCollection;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageCollection;
use ITB\ShopwareSdkEntity\CmsSection\CmsSectionCollection;
use ITB\ShopwareSdkEntity\Document\DocumentCollection;
use ITB\ShopwareSdkEntity\DocumentBaseConfig\DocumentBaseConfigCollection;
use ITB\ShopwareSdkEntity\MailTemplateMedia\MailTemplateMediaCollection;
use ITB\ShopwareSdkEntity\MediaFolder\MediaFolderEntity;
use ITB\ShopwareSdkEntity\MediaThumbnail\MediaThumbnailCollection;
use ITB\ShopwareSdkEntity\MediaTranslation\MediaTranslationCollection;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemCollection;
use ITB\ShopwareSdkEntity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodCollection;
use ITB\ShopwareSdkEntity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use ITB\ShopwareSdkEntity\ProductDownload\ProductDownloadCollection;
use ITB\ShopwareSdkEntity\ProductManufacturer\ProductManufacturerCollection;
use ITB\ShopwareSdkEntity\ProductMedia\ProductMediaCollection;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\Theme\ThemeCollection;
use ITB\ShopwareSdkEntity\User\UserCollection;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaEntity extends Entity
{
    public ?string $alt = null;

    public ?AppPaymentMethodCollection $appPaymentMethods = null;

    public ?UserCollection $avatarUsers = null;

    public ?CategoryCollection $categories = null;

    public ?CmsBlockCollection $cmsBlocks = null;

    public ?CmsPageCollection $cmsPages = null;

    public ?CmsSectionCollection $cmsSections = null;

    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;

    public ?DocumentCollection $documents = null;

    public ?string $fileExtension = null;

    public ?string $fileName = null;

    public ?int $fileSize = null;

    public ?bool $hasFile = null;

    public ?MailTemplateMediaCollection $mailTemplateMedia = null;

    public ?MediaFolderEntity $mediaFolder = null;

    public ?string $mediaFolderId = null;

    public ?array $mediaType = null;

    public ?string $mediaTypeRaw = null;

    public ?array $metaData = null;

    public ?string $mimeType = null;

    public ?OrderLineItemDownloadCollection $orderLineItemDownloads = null;

    public ?OrderLineItemCollection $orderLineItems = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?bool $private = null;

    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;

    public ?ProductDownloadCollection $productDownloads = null;

    public ?ProductManufacturerCollection $productManufacturers = null;

    public ?ProductMediaCollection $productMedia = null;

    public ?PropertyGroupOptionCollection $propertyGroupOptions = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?TagCollection $tags = null;

    public ?ThemeCollection $themeMedia = null;

    public ?ThemeCollection $themes = null;

    public ?MediaThumbnailCollection $thumbnails = null;

    public ?string $thumbnailsRo = null;

    public ?string $title = null;

    public ?MediaTranslationCollection $translations = null;

    public ?\DateTimeInterface $uploadedAt = null;

    public ?string $url = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryEntity;
use ITB\ShopwareSdkEntity\CmsPage\CmsPageEntity;
use ITB\ShopwareSdkEntity\Country\CountryCollection;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\Currency\CurrencyCollection;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\CustomerGroup\CustomerGroupCollection;
use ITB\ShopwareSdkEntity\CustomerGroup\CustomerGroupEntity;
use ITB\ShopwareSdkEntity\CustomerWishlist\CustomerWishlistCollection;
use ITB\ShopwareSdkEntity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageCollection;
use ITB\ShopwareSdkEntity\Language\LanguageCollection;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\MailHeaderFooter\MailHeaderFooterEntity;
use ITB\ShopwareSdkEntity\MainCategory\MainCategoryCollection;
use ITB\ShopwareSdkEntity\NewsletterRecipient\NewsletterRecipientCollection;
use ITB\ShopwareSdkEntity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;
use ITB\ShopwareSdkEntity\ProductExport\ProductExportCollection;
use ITB\ShopwareSdkEntity\ProductReview\ProductReviewCollection;
use ITB\ShopwareSdkEntity\ProductVisibility\ProductVisibilityCollection;
use ITB\ShopwareSdkEntity\PromotionSalesChannel\PromotionSalesChannelCollection;
use ITB\ShopwareSdkEntity\SalesChannelAnalytics\SalesChannelAnalyticsEntity;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainCollection;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainEntity;
use ITB\ShopwareSdkEntity\SalesChannelTranslation\SalesChannelTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannelType\SalesChannelTypeEntity;
use ITB\ShopwareSdkEntity\SeoUrl\SeoUrlCollection;
use ITB\ShopwareSdkEntity\SeoUrlTemplate\SeoUrlTemplateCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;
use ITB\ShopwareSdkEntity\SystemConfig\SystemConfigCollection;
use ITB\ShopwareSdkEntity\Theme\ThemeCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelEntity extends Entity
{
    public ?string $accessKey = null;

    public ?bool $active = null;

    public ?SalesChannelAnalyticsEntity $analytics = null;

    public ?string $analyticsId = null;

    public ?CustomerCollection $boundCustomers = null;

    public ?array $configuration = null;

    public ?CountryCollection $countries = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?CurrencyCollection $currencies = null;

    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?string $customerGroupId = null;

    public ?CustomerGroupCollection $customerGroupsRegistrations = null;

    public ?CustomerCollection $customers = null;

    public ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels = null;

    public ?SalesChannelDomainCollection $domains = null;

    public ?CategoryEntity $footerCategory = null;

    public ?string $footerCategoryId = null;

    public ?string $footerCategoryVersionId = null;

    public ?CmsPageEntity $homeCmsPage = null;

    public ?string $homeCmsPageId = null;

    public ?string $homeCmsPageVersionId = null;

    public ?bool $homeEnabled = null;

    public ?string $homeKeywords = null;

    public ?string $homeMetaDescription = null;

    public ?string $homeMetaTitle = null;

    public ?string $homeName = null;

    public ?array $homeSlotConfig = null;

    public ?bool $hreflangActive = null;

    public ?SalesChannelDomainEntity $hreflangDefaultDomain = null;

    public ?string $hreflangDefaultDomainId = null;

    public ?LandingPageCollection $landingPages = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?LanguageCollection $languages = null;

    public ?MailHeaderFooterEntity $mailHeaderFooter = null;

    public ?string $mailHeaderFooterId = null;

    public ?MainCategoryCollection $mainCategories = null;

    public ?bool $maintenance = null;

    public ?array $maintenanceIpWhitelist = null;

    public ?string $name = null;

    public ?CategoryEntity $navigationCategory = null;

    public ?int $navigationCategoryDepth = null;

    public ?string $navigationCategoryId = null;

    public ?string $navigationCategoryVersionId = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?OrderCollection $orders = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?string $paymentMethodId = null;

    public ?array $paymentMethodIds = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?ProductExportCollection $productExports = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?ProductVisibilityCollection $productVisibilities = null;

    public ?PromotionSalesChannelCollection $promotionSalesChannels = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?SeoUrlTemplateCollection $seoUrlTemplates = null;

    public ?CategoryEntity $serviceCategory = null;

    public ?string $serviceCategoryId = null;

    public ?string $serviceCategoryVersionId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?string $shortName = null;

    public ?SystemConfigCollection $systemConfigs = null;

    public ?string $taxCalculationType = null;

    public ?ThemeCollection $themes = null;

    public ?SalesChannelTranslationCollection $translations = null;

    public ?SalesChannelTypeEntity $type = null;

    public ?string $typeId = null;

    public ?CustomerWishlistCollection $wishlists = null;
}

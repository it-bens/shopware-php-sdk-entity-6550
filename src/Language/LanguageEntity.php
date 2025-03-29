<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Language;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use ITB\ShopwareSdkEntity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use ITB\ShopwareSdkEntity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use ITB\ShopwareSdkEntity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use ITB\ShopwareSdkEntity\AppTranslation\AppTranslationCollection;
use ITB\ShopwareSdkEntity\CategoryTranslation\CategoryTranslationCollection;
use ITB\ShopwareSdkEntity\CmsPageTranslation\CmsPageTranslationCollection;
use ITB\ShopwareSdkEntity\CmsSlotTranslation\CmsSlotTranslationCollection;
use ITB\ShopwareSdkEntity\CountryStateTranslation\CountryStateTranslationCollection;
use ITB\ShopwareSdkEntity\CountryTranslation\CountryTranslationCollection;
use ITB\ShopwareSdkEntity\CurrencyTranslation\CurrencyTranslationCollection;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use ITB\ShopwareSdkEntity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use ITB\ShopwareSdkEntity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use ITB\ShopwareSdkEntity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use ITB\ShopwareSdkEntity\LandingPageTranslation\LandingPageTranslationCollection;
use ITB\ShopwareSdkEntity\Locale\LocaleEntity;
use ITB\ShopwareSdkEntity\LocaleTranslation\LocaleTranslationCollection;
use ITB\ShopwareSdkEntity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use ITB\ShopwareSdkEntity\MailTemplateTranslation\MailTemplateTranslationCollection;
use ITB\ShopwareSdkEntity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use ITB\ShopwareSdkEntity\MediaTranslation\MediaTranslationCollection;
use ITB\ShopwareSdkEntity\NewsletterRecipient\NewsletterRecipientCollection;
use ITB\ShopwareSdkEntity\NumberRangeTranslation\NumberRangeTranslationCollection;
use ITB\ShopwareSdkEntity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use ITB\ShopwareSdkEntity\PluginTranslation\PluginTranslationCollection;
use ITB\ShopwareSdkEntity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use ITB\ShopwareSdkEntity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use ITB\ShopwareSdkEntity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use ITB\ShopwareSdkEntity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use ITB\ShopwareSdkEntity\ProductReview\ProductReviewCollection;
use ITB\ShopwareSdkEntity\ProductSearchConfig\ProductSearchConfigEntity;
use ITB\ShopwareSdkEntity\ProductSearchKeyword\ProductSearchKeywordCollection;
use ITB\ShopwareSdkEntity\ProductSortingTranslation\ProductSortingTranslationCollection;
use ITB\ShopwareSdkEntity\ProductStreamTranslation\ProductStreamTranslationCollection;
use ITB\ShopwareSdkEntity\ProductTranslation\ProductTranslationCollection;
use ITB\ShopwareSdkEntity\PromotionTranslation\PromotionTranslationCollection;
use ITB\ShopwareSdkEntity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use ITB\ShopwareSdkEntity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainCollection;
use ITB\ShopwareSdkEntity\SalesChannelTranslation\SalesChannelTranslationCollection;
use ITB\ShopwareSdkEntity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use ITB\ShopwareSdkEntity\SalutationTranslation\SalutationTranslationCollection;
use ITB\ShopwareSdkEntity\SeoUrl\SeoUrlCollection;
use ITB\ShopwareSdkEntity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use ITB\ShopwareSdkEntity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use ITB\ShopwareSdkEntity\StateMachineTranslation\StateMachineTranslationCollection;
use ITB\ShopwareSdkEntity\TaxProviderTranslation\TaxProviderTranslationCollection;
use ITB\ShopwareSdkEntity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use ITB\ShopwareSdkEntity\ThemeTranslation\ThemeTranslationCollection;
use ITB\ShopwareSdkEntity\UnitTranslation\UnitTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageEntity extends Entity
{
    public ?AppActionButtonTranslationCollection $actionButtonTranslations = null;

    public ?AppCmsBlockTranslationCollection $appCmsBlockTranslations = null;

    public ?AppFlowActionTranslationCollection $appFlowActionTranslations = null;

    public ?AppScriptConditionTranslationCollection $appScriptConditionTranslations = null;

    public ?AppTranslationCollection $appTranslations = null;

    public ?CategoryTranslationCollection $categoryTranslations = null;

    public ?LanguageCollection $children = null;

    public ?CmsPageTranslationCollection $cmsPageTranslations = null;

    public ?CmsSlotTranslationCollection $cmsSlotTranslations = null;

    public ?CountryStateTranslationCollection $countryStateTranslations = null;

    public ?CountryTranslationCollection $countryTranslations = null;

    public ?CurrencyTranslationCollection $currencyTranslations = null;

    public ?CustomerGroupTranslationCollection $customerGroupTranslations = null;

    public ?CustomerCollection $customers = null;

    public ?DeliveryTimeTranslationCollection $deliveryTimeTranslations = null;

    public ?DocumentTypeTranslationCollection $documentTypeTranslations = null;

    public ?ImportExportProfileTranslationCollection $importExportProfileTranslations = null;

    public ?LandingPageTranslationCollection $landingPageTranslations = null;

    public ?LocaleEntity $locale = null;

    public ?string $localeId = null;

    public ?LocaleTranslationCollection $localeTranslations = null;

    public ?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations = null;

    public ?MailTemplateTranslationCollection $mailTemplateTranslations = null;

    public ?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations = null;

    public ?MediaTranslationCollection $mediaTranslations = null;

    public ?string $name = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?NumberRangeTranslationCollection $numberRangeTranslations = null;

    public ?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations = null;

    public ?OrderCollection $orders = null;

    public ?LanguageEntity $parent = null;

    public ?string $parentId = null;

    public ?PaymentMethodTranslationCollection $paymentMethodTranslations = null;

    public ?PluginTranslationCollection $pluginTranslations = null;

    public ?ProductCrossSellingTranslationCollection $productCrossSellingTranslations = null;

    public ?ProductFeatureSetTranslationCollection $productFeatureSetTranslations = null;

    public ?ProductKeywordDictionaryCollection $productKeywordDictionaries = null;

    public ?ProductManufacturerTranslationCollection $productManufacturerTranslations = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?ProductSearchConfigEntity $productSearchConfig = null;

    public ?ProductSearchKeywordCollection $productSearchKeywords = null;

    public ?ProductSortingTranslationCollection $productSortingTranslations = null;

    public ?ProductStreamTranslationCollection $productStreamTranslations = null;

    public ?ProductTranslationCollection $productTranslations = null;

    public ?PromotionTranslationCollection $promotionTranslations = null;

    public ?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations = null;

    public ?PropertyGroupTranslationCollection $propertyGroupTranslations = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelTranslationCollection $salesChannelTranslations = null;

    public ?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations = null;

    public ?SalutationTranslationCollection $salutationTranslations = null;

    public ?SeoUrlCollection $seoUrlTranslations = null;

    public ?ShippingMethodTranslationCollection $shippingMethodTranslations = null;

    public ?StateMachineStateTranslationCollection $stateMachineStateTranslations = null;

    public ?StateMachineTranslationCollection $stateMachineTranslations = null;

    public ?TaxProviderTranslationCollection $taxProviderTranslations = null;

    public ?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations = null;

    public ?ThemeTranslationCollection $themeTranslations = null;

    public ?LocaleEntity $translationCode = null;

    public ?string $translationCodeId = null;

    public ?UnitTranslationCollection $unitTranslations = null;
}

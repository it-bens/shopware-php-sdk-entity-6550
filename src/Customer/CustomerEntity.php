<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Customer;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomerAddress\CustomerAddressCollection;
use ITB\ShopwareSdkEntity\CustomerAddress\CustomerAddressEntity;
use ITB\ShopwareSdkEntity\CustomerGroup\CustomerGroupEntity;
use ITB\ShopwareSdkEntity\CustomerRecovery\CustomerRecoveryEntity;
use ITB\ShopwareSdkEntity\CustomerWishlist\CustomerWishlistCollection;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\OrderCustomer\OrderCustomerCollection;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodEntity;
use ITB\ShopwareSdkEntity\ProductReview\ProductReviewCollection;
use ITB\ShopwareSdkEntity\Promotion\PromotionCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerEntity extends Entity
{
    public ?string $accountType = null;

    public ?bool $active = null;

    public ?CustomerAddressCollection $addresses = null;

    public ?string $affiliateCode = null;

    public ?int $autoIncrement = null;

    public ?\DateTimeInterface $birthday = null;

    public ?SalesChannelEntity $boundSalesChannel = null;

    public ?string $boundSalesChannelId = null;

    public ?string $campaignCode = null;

    public ?string $company = null;

    public ?UserEntity $createdBy = null;

    public ?string $createdById = null;

    public ?string $customerNumber = null;

    public ?CustomerAddressEntity $defaultBillingAddress = null;

    public ?string $defaultBillingAddressId = null;

    public ?PaymentMethodEntity $defaultPaymentMethod = null;

    public ?string $defaultPaymentMethodId = null;

    public ?CustomerAddressEntity $defaultShippingAddress = null;

    public ?string $defaultShippingAddressId = null;

    public ?\DateTimeInterface $doubleOptInConfirmDate = null;

    public ?\DateTimeInterface $doubleOptInEmailSentDate = null;

    public ?bool $doubleOptInRegistration = null;

    public ?string $email = null;

    public ?\DateTimeInterface $firstLogin = null;

    public ?string $firstName = null;

    public ?CustomerGroupEntity $group = null;

    public ?string $groupId = null;

    public ?bool $guest = null;

    public ?string $hash = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?\DateTimeInterface $lastLogin = null;

    public ?string $lastName = null;

    public ?\DateTimeInterface $lastOrderDate = null;

    public ?PaymentMethodEntity $lastPaymentMethod = null;

    public ?string $lastPaymentMethodId = null;

    public ?string $legacyEncoder = null;

    public ?string $legacyPassword = null;

    public ?array $newsletterSalesChannelIds = null;

    public ?int $orderCount = null;

    public ?OrderCustomerCollection $orderCustomers = null;

    public ?float $orderTotalAmount = null;

    public ?string $password = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?PromotionCollection $promotions = null;

    public ?CustomerRecoveryEntity $recoveryCustomer = null;

    public ?string $remoteAddress = null;

    public ?CustomerGroupEntity $requestedGroup = null;

    public ?string $requestedGroupId = null;

    public ?int $reviewCount = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;

    public ?array $tagIds = null;

    public ?TagCollection $tags = null;

    public ?string $title = null;

    public ?UserEntity $updatedBy = null;

    public ?string $updatedById = null;

    public ?array $vatIds = null;

    public ?CustomerWishlistCollection $wishlists = null;
}

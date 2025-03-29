<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Order;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\Document\DocumentCollection;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressCollection;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressEntity;
use ITB\ShopwareSdkEntity\OrderCustomer\OrderCustomerEntity;
use ITB\ShopwareSdkEntity\OrderDelivery\OrderDeliveryCollection;
use ITB\ShopwareSdkEntity\OrderLineItem\OrderLineItemCollection;
use ITB\ShopwareSdkEntity\OrderTransaction\OrderTransactionCollection;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\StateMachineState\StateMachineStateEntity;
use ITB\ShopwareSdkEntity\Tag\TagCollection;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderEntity extends Entity
{
    public ?OrderAddressCollection $addresses = null;

    public ?string $affiliateCode = null;

    public ?float $amountNet = null;

    public ?float $amountTotal = null;

    public ?int $autoIncrement = null;

    public ?OrderAddressEntity $billingAddress = null;

    public ?string $billingAddressId = null;

    public ?string $billingAddressVersionId = null;

    public ?string $campaignCode = null;

    public ?UserEntity $createdBy = null;

    public ?string $createdById = null;

    public ?CurrencyEntity $currency = null;

    public ?float $currencyFactor = null;

    public ?string $currencyId = null;

    public ?string $customerComment = null;

    public ?string $deepLinkCode = null;

    public ?OrderDeliveryCollection $deliveries = null;

    public ?DocumentCollection $documents = null;

    public ?array $itemRounding = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?OrderLineItemCollection $lineItems = null;

    public ?OrderCustomerEntity $orderCustomer = null;

    public ?\DateTimeInterface $orderDate = null;

    public ?\DateTimeInterface $orderDateTime = null;

    public ?string $orderNumber = null;

    public ?float $positionPrice = null;

    public ?array $price = null;

    public ?array $ruleIds = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?array $shippingCosts = null;

    public ?float $shippingTotal = null;

    public ?string $source = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?TagCollection $tags = null;

    public ?string $taxStatus = null;

    public ?array $totalRounding = null;

    public ?OrderTransactionCollection $transactions = null;

    public ?UserEntity $updatedBy = null;

    public ?string $updatedById = null;
}

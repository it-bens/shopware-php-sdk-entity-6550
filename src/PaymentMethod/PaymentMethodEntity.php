<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppPaymentMethod\AppPaymentMethodEntity;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\OrderTransaction\OrderTransactionCollection;
use ITB\ShopwareSdkEntity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use ITB\ShopwareSdkEntity\Plugin\PluginEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodEntity extends Entity
{
    public ?bool $active = null;

    public ?bool $afterOrderEnabled = null;

    public ?AppPaymentMethodEntity $appPaymentMethod = null;

    public ?bool $asynchronous = null;

    public ?RuleEntity $availabilityRule = null;

    public ?string $availabilityRuleId = null;

    public ?CustomerCollection $customers = null;

    public ?string $description = null;

    public ?string $distinguishableName = null;

    public ?string $formattedHandlerIdentifier = null;

    public ?string $handlerIdentifier = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $name = null;

    public ?OrderTransactionCollection $orderTransactions = null;

    public ?PluginEntity $plugin = null;

    public ?string $pluginId = null;

    public ?int $position = null;

    public ?bool $prepared = null;

    public ?bool $recurring = null;

    public ?bool $refundable = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?string $shortName = null;

    public ?bool $synchronous = null;

    public ?PaymentMethodTranslationCollection $translations = null;
}

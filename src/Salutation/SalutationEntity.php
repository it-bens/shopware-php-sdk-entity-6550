<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Salutation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\CustomerAddress\CustomerAddressCollection;
use ITB\ShopwareSdkEntity\NewsletterRecipient\NewsletterRecipientCollection;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressCollection;
use ITB\ShopwareSdkEntity\OrderCustomer\OrderCustomerCollection;
use ITB\ShopwareSdkEntity\SalutationTranslation\SalutationTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalutationEntity extends Entity
{
    public ?CustomerAddressCollection $customerAddresses = null;

    public ?CustomerCollection $customers = null;

    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?OrderCustomerCollection $orderCustomers = null;

    public ?string $salutationKey = null;

    public ?SalutationTranslationCollection $translations = null;
}

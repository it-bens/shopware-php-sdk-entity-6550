<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Tag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryCollection;
use ITB\ShopwareSdkEntity\Customer\CustomerCollection;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageCollection;
use ITB\ShopwareSdkEntity\Media\MediaCollection;
use ITB\ShopwareSdkEntity\NewsletterRecipient\NewsletterRecipientCollection;
use ITB\ShopwareSdkEntity\Order\OrderCollection;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\Rule\RuleCollection;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TagEntity extends Entity
{
    public ?CategoryCollection $categories = null;

    public ?CustomerCollection $customers = null;

    public ?LandingPageCollection $landingPages = null;

    public ?MediaCollection $media = null;

    public ?string $name = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?OrderCollection $orders = null;

    public ?ProductCollection $products = null;

    public ?RuleCollection $rules = null;

    public ?ShippingMethodCollection $shippingMethods = null;
}

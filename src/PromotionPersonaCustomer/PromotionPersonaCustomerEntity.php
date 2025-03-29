<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionPersonaCustomer;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaCustomerEntity extends Entity
{
    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;
}

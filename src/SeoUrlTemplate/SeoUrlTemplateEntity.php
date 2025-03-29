<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SeoUrlTemplate;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlTemplateEntity extends Entity
{
    public ?string $entityName = null;

    public ?bool $isValid = null;

    public ?string $routeName = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?string $template = null;
}

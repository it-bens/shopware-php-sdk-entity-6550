<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSearchConfigField;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomField\CustomFieldEntity;
use ITB\ShopwareSdkEntity\ProductSearchConfig\ProductSearchConfigEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigFieldEntity extends Entity
{
    public ?CustomFieldEntity $customField = null;

    public ?string $customFieldId = null;

    public ?string $field = null;

    public ?int $ranking = null;

    public ?bool $searchable = null;

    public ?ProductSearchConfigEntity $searchConfig = null;

    public ?string $searchConfigId = null;

    public ?bool $tokenize = null;
}

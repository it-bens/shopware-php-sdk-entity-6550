<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomField;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomFieldSet\CustomFieldSetEntity;
use ITB\ShopwareSdkEntity\ProductSearchConfigField\ProductSearchConfigFieldCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldEntity extends Entity
{
    public ?bool $active = null;

    public ?bool $allowCartExpose = null;

    public ?bool $allowCustomerWrite = null;

    public ?array $config = null;

    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?string $customFieldSetId = null;

    public ?string $name = null;

    public ?ProductSearchConfigFieldCollection $productSearchConfigFields = null;

    public ?string $type = null;
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomFieldSetRelation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomFieldSet\CustomFieldSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetRelationEntity extends Entity
{
    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?string $customFieldSetId = null;

    public ?string $entityName = null;
}

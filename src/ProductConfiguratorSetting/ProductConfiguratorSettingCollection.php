<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductConfiguratorSetting;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductConfiguratorSettingEntity>
 */
class ProductConfiguratorSettingCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductConfiguratorSettingEntity::class;
    }
}

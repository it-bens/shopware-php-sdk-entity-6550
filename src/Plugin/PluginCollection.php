<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Plugin;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PluginEntity>
 */
class PluginCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PluginEntity::class;
    }
}

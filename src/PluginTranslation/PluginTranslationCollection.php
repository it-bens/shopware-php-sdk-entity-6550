<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PluginTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PluginTranslationEntity>
 */
class PluginTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PluginTranslationEntity::class;
    }
}

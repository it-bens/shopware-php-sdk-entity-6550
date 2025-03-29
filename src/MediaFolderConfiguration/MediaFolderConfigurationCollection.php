<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolderConfiguration;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaFolderConfigurationEntity>
 */
class MediaFolderConfigurationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaFolderConfigurationEntity::class;
    }
}

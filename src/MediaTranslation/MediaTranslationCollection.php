<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MediaTranslationEntity>
 */
class MediaTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MediaTranslationEntity::class;
    }
}

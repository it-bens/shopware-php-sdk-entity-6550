<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPage;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<LandingPageEntity>
 */
class LandingPageCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return LandingPageEntity::class;
    }
}

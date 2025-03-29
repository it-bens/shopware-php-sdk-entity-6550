<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\RuleTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<RuleTagEntity>
 */
class RuleTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return RuleTagEntity::class;
    }
}

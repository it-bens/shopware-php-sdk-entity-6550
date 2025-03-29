<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxRule;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<TaxRuleEntity>
 */
class TaxRuleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TaxRuleEntity::class;
    }
}

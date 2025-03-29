<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxRuleTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<TaxRuleTypeTranslationEntity>
 */
class TaxRuleTypeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TaxRuleTypeTranslationEntity::class;
    }
}

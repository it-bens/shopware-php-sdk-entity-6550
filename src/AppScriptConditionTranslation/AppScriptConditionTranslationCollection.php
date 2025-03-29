<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppScriptConditionTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppScriptConditionTranslationEntity>
 */
class AppScriptConditionTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppScriptConditionTranslationEntity::class;
    }
}

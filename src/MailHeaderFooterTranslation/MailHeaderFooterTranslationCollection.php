<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailHeaderFooterTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailHeaderFooterTranslationEntity>
 */
class MailHeaderFooterTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailHeaderFooterTranslationEntity::class;
    }
}

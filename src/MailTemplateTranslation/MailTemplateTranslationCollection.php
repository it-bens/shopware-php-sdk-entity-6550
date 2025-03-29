<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailTemplateTranslationEntity>
 */
class MailTemplateTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailTemplateTranslationEntity::class;
    }
}

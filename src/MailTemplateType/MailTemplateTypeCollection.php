<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateType;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailTemplateTypeEntity>
 */
class MailTemplateTypeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailTemplateTypeEntity::class;
    }
}

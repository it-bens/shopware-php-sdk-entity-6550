<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplate;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailTemplateEntity>
 */
class MailTemplateCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailTemplateEntity::class;
    }
}

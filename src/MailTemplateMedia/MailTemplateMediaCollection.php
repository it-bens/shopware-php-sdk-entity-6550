<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailTemplateMedia;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailTemplateMediaEntity>
 */
class MailTemplateMediaCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailTemplateMediaEntity::class;
    }
}

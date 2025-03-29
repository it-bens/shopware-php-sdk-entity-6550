<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MailHeaderFooter;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MailHeaderFooterEntity>
 */
class MailHeaderFooterCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MailHeaderFooterEntity::class;
    }
}

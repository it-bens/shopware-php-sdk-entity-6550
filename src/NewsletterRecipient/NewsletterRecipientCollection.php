<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NewsletterRecipient;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NewsletterRecipientEntity>
 */
class NewsletterRecipientCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NewsletterRecipientEntity::class;
    }
}

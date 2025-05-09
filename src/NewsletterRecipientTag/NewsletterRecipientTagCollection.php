<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NewsletterRecipientTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NewsletterRecipientTagEntity>
 */
class NewsletterRecipientTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NewsletterRecipientTagEntity::class;
    }
}

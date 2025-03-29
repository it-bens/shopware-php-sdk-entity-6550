<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NewsletterRecipientTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\NewsletterRecipient\NewsletterRecipientEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientTagEntity extends Entity
{
    public ?NewsletterRecipientEntity $newsletterRecipient = null;

    public ?string $newsletterRecipientId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

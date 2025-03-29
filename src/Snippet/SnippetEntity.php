<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Snippet;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SnippetSet\SnippetSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetEntity extends Entity
{
    public ?string $author = null;

    public ?SnippetSetEntity $set = null;

    public ?string $setId = null;

    public ?string $translationKey = null;

    public ?string $value = null;
}

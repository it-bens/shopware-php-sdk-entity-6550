<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SnippetSet;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannelDomain\SalesChannelDomainCollection;
use ITB\ShopwareSdkEntity\Snippet\SnippetCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetSetEntity extends Entity
{
    public ?string $baseFile = null;

    public ?string $iso = null;

    public ?string $name = null;

    public ?SalesChannelDomainCollection $salesChannelDomains = null;

    public ?SnippetCollection $snippets = null;
}

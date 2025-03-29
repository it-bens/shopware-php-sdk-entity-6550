<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NewsletterRecipient;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;
use ITB\ShopwareSdkEntity\Tag\TagCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientEntity extends Entity
{
    public ?string $city = null;

    public ?\DateTimeInterface $confirmedAt = null;

    public ?string $email = null;

    public ?string $firstName = null;

    public ?string $hash = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $lastName = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;

    public ?string $status = null;

    public ?string $street = null;

    public ?TagCollection $tags = null;

    public ?string $title = null;

    public ?string $zipCode = null;
}

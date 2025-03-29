<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Plugin;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\PaymentMethod\PaymentMethodCollection;
use ITB\ShopwareSdkEntity\PluginTranslation\PluginTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginEntity extends Entity
{
    public ?bool $active = null;

    public ?string $author = null;

    public ?array $autoload = null;

    public ?string $baseClass = null;

    public ?array $changelog = null;

    public ?string $composerName = null;

    public ?string $copyright = null;

    public ?string $description = null;

    public ?string $icon = null;

    public ?string $iconRaw = null;

    public ?\DateTimeInterface $installedAt = null;

    public ?string $label = null;

    public ?string $license = null;

    public ?bool $managedByComposer = null;

    public ?string $manufacturerLink = null;

    public ?string $name = null;

    public ?string $path = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?string $supportLink = null;

    public ?PluginTranslationCollection $translations = null;

    public ?\DateTimeInterface $upgradedAt = null;

    public ?string $upgradeVersion = null;

    public ?string $version = null;
}

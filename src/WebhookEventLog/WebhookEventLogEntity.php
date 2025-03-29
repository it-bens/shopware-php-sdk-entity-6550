<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\WebhookEventLog;

use ITB\ShopwareSdkDataCore\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class WebhookEventLogEntity extends Entity
{
    public ?string $appName = null;

    public ?string $appVersion = null;

    public ?string $deliveryStatus = null;

    public ?string $eventName = null;

    public ?int $processingTime = null;

    public ?array $requestContent = null;

    public ?array $responseContent = null;

    public ?string $responseReasonPhrase = null;

    public ?int $responseStatusCode = null;

    public ?string $serializedWebhookMessage = null;

    public ?int $timestamp = null;

    public ?string $url = null;

    public ?string $webhookName = null;
}

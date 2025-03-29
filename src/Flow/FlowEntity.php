<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Flow;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppFlowEvent\AppFlowEventEntity;
use ITB\ShopwareSdkEntity\FlowSequence\FlowSequenceCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowEntity extends Entity
{
    public ?bool $active = null;

    public ?AppFlowEventEntity $appFlowEvent = null;

    public ?string $appFlowEventId = null;

    public ?string $description = null;

    public ?string $eventName = null;

    public ?bool $invalid = null;

    public ?string $name = null;

    public ?string $payload = null;

    public ?int $priority = null;

    public ?FlowSequenceCollection $sequences = null;
}

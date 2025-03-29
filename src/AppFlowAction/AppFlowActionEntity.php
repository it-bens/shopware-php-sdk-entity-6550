<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppFlowAction;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use ITB\ShopwareSdkEntity\FlowSequence\FlowSequenceCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowActionEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $badge = null;

    public ?array $config = null;

    public ?bool $delayable = null;

    public ?string $description = null;

    public ?FlowSequenceCollection $flowSequences = null;

    public ?array $headers = null;

    public ?string $headline = null;

    public ?string $icon = null;

    public ?string $iconRaw = null;

    public ?string $label = null;

    public ?string $name = null;

    public ?array $parameters = null;

    public ?array $requirements = null;

    public ?string $swIcon = null;

    public ?AppFlowActionTranslationCollection $translations = null;

    public ?string $url = null;
}

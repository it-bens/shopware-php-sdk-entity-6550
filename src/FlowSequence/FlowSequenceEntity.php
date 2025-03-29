<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\FlowSequence;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppFlowAction\AppFlowActionEntity;
use ITB\ShopwareSdkEntity\Flow\FlowEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowSequenceEntity extends Entity
{
    public ?string $actionName = null;

    public ?AppFlowActionEntity $appFlowAction = null;

    public ?string $appFlowActionId = null;

    public ?FlowSequenceCollection $children = null;

    public ?array $config = null;

    public ?int $displayGroup = null;

    public ?FlowEntity $flow = null;

    public ?string $flowId = null;

    public ?FlowSequenceEntity $parent = null;

    public ?string $parentId = null;

    public ?int $position = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;

    public ?bool $trueCase = null;
}

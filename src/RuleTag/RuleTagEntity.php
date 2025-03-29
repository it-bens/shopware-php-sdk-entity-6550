<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\RuleTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleTagEntity extends Entity
{
    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}

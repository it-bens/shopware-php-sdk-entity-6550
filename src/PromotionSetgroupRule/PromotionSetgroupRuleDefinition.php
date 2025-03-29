<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSetgroupRule;

use ITB\ShopwareSdkDataCore\Entity\EntityDefinition;
use ITB\ShopwareSdkDataCore\Schema\Flag;
use ITB\ShopwareSdkDataCore\Schema\FlagCollection;
use ITB\ShopwareSdkDataCore\Schema\Property;
use ITB\ShopwareSdkDataCore\Schema\PropertyCollection;
use ITB\ShopwareSdkDataCore\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupRuleDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'promotion_setgroup_rule';

    #[\Override]
    public function getEntityClass(): string
    {
        return PromotionSetgroupRuleEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return PromotionSetgroupRuleCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('promotion_setgroup_rule', new PropertyCollection([
            new Property('setgroupId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('ruleId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('setgroup', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'promotion_setgroup',
                'referenceField' => 'id',
                'localField' => 'setgroupId',
                'relation' => 'many_to_one',
            ]),
            new Property('rule', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'rule',
                'referenceField' => 'id',
                'localField' => 'ruleId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}

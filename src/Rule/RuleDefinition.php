<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Rule;

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
class RuleDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'rule';

    #[\Override]
    public function getEntityClass(): string
    {
        return RuleEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return RuleCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('rule', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('name', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('priority', 'int', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('description', 'text', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('payload', 'blob', new FlagCollection([new Flag('write_protected', [['system']])]), []),
            new Property('invalid', 'boolean', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('write_protected', [['system']]),
            ]), []),
            new Property('areas', 'json_list', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('write_protected', [['system']]),
            ]), []),
            new Property('customFields', 'json_object', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('moduleTypes', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('conditions', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('cascade_delete', 1),
            ]), [
                'entity' => 'rule_condition',
                'referenceField' => 'ruleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productPrices', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'product_price',
                'referenceField' => 'ruleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('shippingMethodPrices', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'shipping_method_price',
                'referenceField' => 'ruleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('shippingMethodPriceCalculations', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'shipping_method_price',
                'referenceField' => 'calculationRuleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('shippingMethods', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'shipping_method',
                'referenceField' => 'availabilityRuleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('paymentMethods', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'payment_method',
                'referenceField' => 'availabilityRuleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('personaPromotions', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'promotion',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('flowSequences', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'flow_sequence',
                'referenceField' => 'ruleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('taxProviders', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('since', '6.5.0.0'),
            ]), [
                'entity' => 'tax_provider',
                'referenceField' => 'availabilityRuleId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('tags', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'tag',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('orderPromotions', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'promotion',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('cartPromotions', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'promotion',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('promotionDiscounts', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'promotion_discount',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('promotionSetGroups', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
                new Flag('rule_areas', 1),
            ]), [
                'entity' => 'promotion_setgroup',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('createdAt', 'date', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('updatedAt', 'date', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
        ]));
    }
}

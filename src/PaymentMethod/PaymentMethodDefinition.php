<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PaymentMethod;

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
class PaymentMethodDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'payment_method';

    #[\Override]
    public function getEntityClass(): string
    {
        return PaymentMethodEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return PaymentMethodCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('payment_method', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('pluginId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('handlerIdentifier', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('name', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
                new Flag('search_ranking', 500),
                new Flag('translatable', 1),
            ]), []),
            new Property('distinguishableName', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [['system']]),
                new Flag('translatable', 1),
            ]), []),
            new Property('description', 'text', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('translatable', 1),
            ]), []),
            new Property('position', 'int', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('active', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('afterOrderEnabled', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('customFields', 'json_object', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('translatable', 1),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('availabilityRuleId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('mediaId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('formattedHandlerIdentifier', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('synchronous', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('asynchronous', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('prepared', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('refundable', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('recurring', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('write_protected', [[]]),
                new Flag('runtime', 1),
            ]), []),
            new Property('translations', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('cascade_delete', 1),
                new Flag('required', 1),
            ]), [
                'entity' => 'payment_method_translation',
                'referenceField' => 'paymentMethodId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('media', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'entity' => 'media',
                'referenceField' => 'id',
                'localField' => 'mediaId',
                'relation' => 'many_to_one',
            ]),
            new Property('availabilityRule', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'rule',
                'referenceField' => 'id',
                'localField' => 'availabilityRuleId',
                'relation' => 'many_to_one',
            ]),
            new Property('salesChannelDefaultAssignments', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
            ]), [
                'entity' => 'sales_channel',
                'referenceField' => 'paymentMethodId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('plugin', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'plugin',
                'referenceField' => 'id',
                'localField' => 'pluginId',
                'relation' => 'many_to_one',
            ]),
            new Property('customers', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
            ]), [
                'entity' => 'customer',
                'referenceField' => 'lastPaymentMethodId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('orderTransactions', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
            ]), [
                'entity' => 'order_transaction',
                'referenceField' => 'paymentMethodId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannels', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('appPaymentMethod', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('cascade_delete', 1),
            ]), [
                'entity' => 'app_payment_method',
                'referenceField' => 'paymentMethodId',
                'localField' => 'id',
                'relation' => 'one_to_one',
            ]),
            new Property('shortName', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('runtime', 1),
            ]), []),
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
            new Property('translated', 'json_object', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('computed', 1),
                new Flag('runtime', 1),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
        ]));
    }
}

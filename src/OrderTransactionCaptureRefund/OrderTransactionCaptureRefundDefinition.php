<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransactionCaptureRefund;

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
class OrderTransactionCaptureRefundDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'order_transaction_capture_refund';

    #[\Override]
    public function getEntityClass(): string
    {
        return OrderTransactionCaptureRefundEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return OrderTransactionCaptureRefundCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('order_transaction_capture_refund', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('versionId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('captureId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('captureVersionId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('stateId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('stateMachineState', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'entity' => 'state_machine_state',
                'referenceField' => 'id',
                'localField' => 'stateId',
                'relation' => 'many_to_one',
            ]),
            new Property('transactionCapture', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'entity' => 'order_transaction_capture',
                'referenceField' => 'id',
                'localField' => 'captureId',
                'relation' => 'many_to_one',
            ]),
            new Property('positions', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('cascade_delete', 1),
            ]), [
                'entity' => 'order_transaction_capture_refund_position',
                'referenceField' => 'refundId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('externalReference', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('reason', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('amount', 'json_object', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), [
                'properties' => json_decode(
                    '{"unitPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"totalPrice":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"quantity":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"calculatedTaxes":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"taxRules":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]],"required":true}},"referencePrice":{"type":"json_object","properties":[],"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"listPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"discount":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"percentage":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"regulationPrice":{"type":"json_object","properties":{"price":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}},"flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}',
                    true
                ),
            ]),
            new Property('customFields', 'json_object', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'properties' => json_decode('[]', true),
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

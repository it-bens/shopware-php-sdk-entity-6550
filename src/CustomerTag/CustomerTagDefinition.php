<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerTag;

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
class CustomerTagDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'customer_tag';

    #[\Override]
    public function getEntityClass(): string
    {
        return CustomerTagEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return CustomerTagCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('customer_tag', new PropertyCollection([
            new Property('customerId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('tagId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('customer', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'customer',
                'referenceField' => 'id',
                'localField' => 'customerId',
                'relation' => 'many_to_one',
            ]),
            new Property('tag', 'association', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), [
                'entity' => 'tag',
                'referenceField' => 'id',
                'localField' => 'tagId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}

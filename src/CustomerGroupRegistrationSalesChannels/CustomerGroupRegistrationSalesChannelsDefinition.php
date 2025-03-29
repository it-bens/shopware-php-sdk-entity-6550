<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerGroupRegistrationSalesChannels;

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
class CustomerGroupRegistrationSalesChannelsDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'customer_group_registration_sales_channels';

    #[\Override]
    public function getEntityClass(): string
    {
        return CustomerGroupRegistrationSalesChannelsEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return CustomerGroupRegistrationSalesChannelsCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('customer_group_registration_sales_channels', new PropertyCollection([
            new Property('customerGroupId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('salesChannelId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('customerGroup', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'customer_group',
                'referenceField' => 'id',
                'localField' => 'customerGroupId',
                'relation' => 'many_to_one',
            ]),
            new Property('salesChannel', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'salesChannelId',
                'relation' => 'many_to_one',
            ]),
            new Property('createdAt', 'date', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
        ]));
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Integration;

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
class IntegrationDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'integration';

    #[\Override]
    public function getEntityClass(): string
    {
        return IntegrationEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return IntegrationCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('integration', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('label', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('accessKey', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('secretAccessKey', 'password', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('lastUsageAt', 'date', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('admin', 'boolean', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('customFields', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('deletedAt', 'date', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('app', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('restrict_delete', 1),
            ]), [
                'entity' => 'app',
                'referenceField' => 'integrationId',
                'localField' => 'id',
                'relation' => 'one_to_one',
            ]),
            new Property('aclRoles', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'acl_role',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('writeAccess', 'boolean', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('deprecated', unserialize(
                    'a:3:{s:16:\"deprecated_since\";s:8:\"v6.5.0.0\";s:18:\"will_be_removed_in\";s:8:\"v6.6.0.0\";s:11:\"replaced_by\";N;}'
                )),
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
            new Property('createdNotifications', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('extension', 1),
            ]), [
                'entity' => 'notification',
                'referenceField' => 'createdByIntegrationId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
        ]));
    }
}

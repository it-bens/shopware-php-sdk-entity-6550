<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\IntegrationRole;

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
class IntegrationRoleDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'integration_role';

    #[\Override]
    public function getEntityClass(): string
    {
        return IntegrationRoleEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return IntegrationRoleCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('integration_role', new PropertyCollection([
            new Property('integrationId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('aclRoleId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('integration', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'integration',
                'referenceField' => 'id',
                'localField' => 'integrationId',
                'relation' => 'many_to_one',
            ]),
            new Property('role', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'acl_role',
                'referenceField' => 'id',
                'localField' => 'aclRoleId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}

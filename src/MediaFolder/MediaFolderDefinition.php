<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolder;

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
class MediaFolderDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'media_folder';

    #[\Override]
    public function getEntityClass(): string
    {
        return MediaFolderEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return MediaFolderCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('media_folder', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('useParentConfiguration', 'boolean', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('configurationId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('defaultFolderId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('parentId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('parent', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'media_folder',
                'referenceField' => 'id',
                'localField' => 'parentId',
                'relation' => 'many_to_one',
            ]),
            new Property('children', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('cascade_delete', 1),
            ]), [
                'entity' => 'media_folder',
                'referenceField' => 'parentId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('childCount', 'int', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('write_protected', [[]]),
            ]), []),
            new Property('path', 'text', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('write_protected', [['system']]),
            ]), []),
            new Property('media', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('set_null_on_delete', 1),
            ]), [
                'entity' => 'media',
                'referenceField' => 'mediaFolderId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('defaultFolder', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'media_default_folder',
                'referenceField' => 'id',
                'localField' => 'defaultFolderId',
                'relation' => 'one_to_one',
            ]),
            new Property('configuration', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'media_folder_configuration',
                'referenceField' => 'id',
                'localField' => 'configurationId',
                'relation' => 'many_to_one',
            ]),
            new Property('name', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 500),
                new Flag('required', 1),
            ]), []),
            new Property('customFields', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
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

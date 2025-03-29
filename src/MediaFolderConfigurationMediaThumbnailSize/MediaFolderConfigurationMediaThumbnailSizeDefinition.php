<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MediaFolderConfigurationMediaThumbnailSize;

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
class MediaFolderConfigurationMediaThumbnailSizeDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'media_folder_configuration_media_thumbnail_size';

    #[\Override]
    public function getEntityClass(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('media_folder_configuration_media_thumbnail_size', new PropertyCollection([
            new Property('mediaFolderConfigurationId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('mediaThumbnailSizeId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('mediaFolderConfiguration', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'media_folder_configuration',
                'referenceField' => 'id',
                'localField' => 'mediaFolderConfigurationId',
                'relation' => 'many_to_one',
            ]),
            new Property('mediaThumbnailSize', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'media_thumbnail_size',
                'referenceField' => 'id',
                'localField' => 'mediaThumbnailSizeId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LogEntry;

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
class LogEntryDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'log_entry';

    #[\Override]
    public function getEntityClass(): string
    {
        return LogEntryEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return LogEntryCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('log_entry', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('message', 'text', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 500),
            ]), []),
            new Property('level', 'int', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('channel', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('context', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 250),
            ]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('extra', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 80),
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

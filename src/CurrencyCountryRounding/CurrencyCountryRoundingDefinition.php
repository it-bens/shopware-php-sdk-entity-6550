<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CurrencyCountryRounding;

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
class CurrencyCountryRoundingDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'currency_country_rounding';

    #[\Override]
    public function getEntityClass(): string
    {
        return CurrencyCountryRoundingEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return CurrencyCountryRoundingCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('currency_country_rounding', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('currencyId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('countryId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('itemRounding', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), [
                'properties' => json_decode(
                    '{"decimals":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"interval":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"roundForNet":{"type":"boolean","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}',
                    true
                ),
            ]),
            new Property('totalRounding', 'json_object', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), [
                'properties' => json_decode(
                    '{"decimals":{"type":"int","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"interval":{"type":"float","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}},"roundForNet":{"type":"boolean","flags":{"read_protected":[["Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource"]]}}}',
                    true
                ),
            ]),
            new Property('currency', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'currency',
                'referenceField' => 'id',
                'localField' => 'currencyId',
                'relation' => 'many_to_one',
            ]),
            new Property('country', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 0.25),
            ]), [
                'entity' => 'country',
                'referenceField' => 'id',
                'localField' => 'countryId',
                'relation' => 'many_to_one',
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

<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductReview;

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
class ProductReviewDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'product_review';

    #[\Override]
    public function getEntityClass(): string
    {
        return ProductReviewEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return ProductReviewCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('product_review', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('productId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('productVersionId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('customerId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), []),
            new Property('salesChannelId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('languageId', 'uuid', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
            ]), []),
            new Property('externalUser', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 250),
            ]), []),
            new Property('externalEmail', 'string', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 250),
            ]), []),
            new Property('title', 'string', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
                new Flag('search_ranking', 80),
            ]), []),
            new Property('content', 'text', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
                new Flag('required', 1),
                new Flag('search_ranking', 80),
                new Flag('allow_html', 1),
            ]), []),
            new Property('points', 'float', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('status', 'boolean', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('comment', 'text', new FlagCollection([
                new Flag('read_protected', [[
                    'Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource'],
                ]),
            ]), []),
            new Property('product', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 0.25),
            ]), [
                'entity' => 'product',
                'referenceField' => 'id',
                'localField' => 'productId',
                'relation' => 'many_to_one',
            ]),
            new Property('customer', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('search_ranking', 250),
            ]), [
                'entity' => 'customer',
                'referenceField' => 'id',
                'localField' => 'customerId',
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
            new Property('language', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'language',
                'referenceField' => 'id',
                'localField' => 'languageId',
                'relation' => 'many_to_one',
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

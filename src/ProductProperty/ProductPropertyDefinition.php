<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductProperty;

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
class ProductPropertyDefinition implements EntityDefinition
{
    public const string ENTITY_NAME = 'product_property';

    #[\Override]
    public function getEntityClass(): string
    {
        return ProductPropertyEntity::class;
    }

    #[\Override]
    public function getEntityCollection(): string
    {
        return ProductPropertyCollection::class;
    }

    #[\Override]
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    #[\Override]
    public function getSchema(): Schema
    {
        return new Schema('product_property', new PropertyCollection([
            new Property('productId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('productVersionId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('required', 1),
            ]), []),
            new Property('optionId', 'uuid', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
                new Flag('primary_key', 1),
                new Flag('required', 1),
            ]), []),
            new Property('product', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'product',
                'referenceField' => 'id',
                'localField' => 'productId',
                'relation' => 'many_to_one',
            ]),
            new Property('option', 'association', new FlagCollection([
                new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]),
            ]), [
                'entity' => 'property_group_option',
                'referenceField' => 'id',
                'localField' => 'optionId',
                'relation' => 'many_to_one',
            ]),
        ]));
    }
}

<?php declare(strict_types=1);

namespace SwagBlog\Core\Content;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\MappingEntityDefinition;
use SwagBlog\Core\Content\Blog\BlogDefinition;

class BlogProductMappingDefinition extends MappingEntityDefinition
{
    public const ENTITY_NAME = 'blog_product_mapping';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    // public function getEntityClass(): string
    // {
    //     return SwagEntity::class;
    // }

    // public function getCollectionClass(): string
    // {
    //     return SwagCollection::class;
    // }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            new FkField('blog_id', 'blogId', BlogDefinition::class),             
            new FkField('product_id', 'productId', ProductDefinition::class),

            new ManyToOneAssociationField(
                'blog',
                'blog_id',
                BlogDefinition::class,
                'id',
                false
            ),
            new ManyToOneAssociationField(
                'product',
                'product_id',
                ProductDefinition::class,
                'id',
                false
            ),
        ]);
    }
}

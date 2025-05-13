<?php declare(strict_types=1);

namespace SwagBlog\Core\Content;

use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\MappingEntityDefinition;
use SwagBlog\Core\Content\Blog\BlogDefinition;
use SwagBlog\Core\Content\BlogCategory\BlogCategoryDefinition;

class BlogCategoryMappingDefinition extends MappingEntityDefinition
{
    public const ENTITY_NAME = 'blog_category_mapping';

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
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            new FkField('blog_id', 'blogId', BlogDefinition::class),             
            new FkField('blog_category_id', 'blogCategoryId', BlogCategoryDefinition::class),

            new ManyToOneAssociationField(
                'blog',
                'blog_id',
                BlogDefinition::class,
                'id',
                false
            ),
            new ManyToOneAssociationField(
                'blogCategory',
                'blog_category_id',
                BlogCategoryDefinition::class,
                'id',
                false
            ),
        ]);
    }
}

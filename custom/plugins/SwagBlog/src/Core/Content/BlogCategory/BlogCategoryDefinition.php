<?php declare(strict_types=1);

namespace SwagBlog\Core\Content\BlogCategory;

use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use SwagBlog\Core\Content\Blog\BlogDefinition;
use SwagBlog\Core\Content\BlogCategoryMappingDefinition;

class BlogCategoryDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'blog_category';

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
            (new IdField('id', 'id'))->addFlags(new Required(),new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new Required()),   
            
            new ManyToManyAssociationField(
                'blogs',
                BlogDefinition::class,
                BlogCategoryMappingDefinition::class,
                'blog_category_id',
                'blog_id',
            )
        ]);
    }
}

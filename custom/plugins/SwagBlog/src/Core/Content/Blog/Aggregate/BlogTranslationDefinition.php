<?php declare(strict_types=1);

namespace SwagBlog\Core\Content\Blog\Aggregate;

use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use SwagBlog\Core\Content\Blog\BlogDefinition;

class BlogTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'blog_translation';

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

    public function getParentDefinitionClass(): string
    {
        return BlogDefinition::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name', 'name'))->addFlags( new ApiAware(), new Required()),
            new StringField('description', 'description'),
            (new StringField('author', 'author'))->addFlags( new Required()),                  
        ]);
    }
}

<?php declare(strict_types=1);

namespace Task\Core\Content\Swag\Aggregate;

use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
// use Shopware\Core\Framework\DataAbstractionLayer\LanguageR
use Task\Core\Content\Swag\SwagDefinition;
// use Task\SwagTask;

class TaskTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'swag_translation';

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
        return SwagDefinition::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([            
            (new StringField('name', 'name'))->addFlags(new ApiAware(),new Required()),
            (new StringField('city', 'city'))->addFlags(new Required()),                         
        ]);
    }
}

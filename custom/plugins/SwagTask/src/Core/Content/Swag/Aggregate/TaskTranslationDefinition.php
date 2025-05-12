<?php declare(strict_types=1);

namespace Task\Core\Content\Swag\Aggregate;

use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Task\Core\Content\Swag\SwagDefinition;
// use Task\SwagTask;

class TaskTranslationDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'task_translation';

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
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new StringField('city', 'city'))->addFlags(new Required()),
        ]);
    }
}

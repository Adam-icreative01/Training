<?php declare(strict_types=1);

namespace Task\Core\Content\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Language\LanguageDefinition;
use Task\Core\Content\Swag\Aggregate\TaskTranslationDefinition;

class LanguageExtension extends EntityExtension
{
    public function getDefinitionClass(): string
    {
        return LanguageDefinition::class;
    }

    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new OneToManyAssociationField(
                'language',
                TaskTranslationDefinition::class,
                'language_id'
            ))
       );
    }
}
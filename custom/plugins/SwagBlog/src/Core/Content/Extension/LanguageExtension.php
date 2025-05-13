<?php declare(strict_types=1);

namespace SwagBlog\Core\Content\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Language\LanguageDefinition;
use SwagBlog\Core\Content\Blog\Aggregate\BlogTranslationDefinition;

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
                BlogTranslationDefinition::class,
                'language_id',
            ))
        );
    }
}
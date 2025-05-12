<?php declare(strict_types=1);

namespace Task\Core\Content\Extension;

use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\Plugin\Extension\LanguageExtension;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Task\Core\Content\Swag\SwagDefinition;

class MediaExtension extends EntityExtension
{
    public function getDefinitionClass(): string
    {
        return MediaDefinition::class;
    }

    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToOneAssociationField(
                'swag',
                'id',
                'media_id',
                SwagDefinition::class,
                false
            )
        );
    }    
}
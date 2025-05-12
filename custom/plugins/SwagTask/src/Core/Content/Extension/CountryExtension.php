<?php declare(strict_types=1);

namespace Task\Core\Content\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Country\CountryDefinition;
use Task\Core\Content\Swag\SwagDefinition;

class CountryExtension extends EntityExtension
{
    public function getDefinitionClass(): string
    {
        return CountryDefinition::class;
    }

    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new OneToManyAssociationField(
                'swag',
                SwagDefinition::class,
                'country_id'
            ))
        );
    }
}
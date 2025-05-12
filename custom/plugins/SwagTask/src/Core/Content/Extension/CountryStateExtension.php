<?php declare(strict_types=1);

namespace Task\Core\Content\Extension;

use Shopware\Core\Framework\Plugin\Extension\LanguageExtension;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition;
use Task\Core\Content\Swag\SwagDefinition;

class CountryStateExtension extends EntityExtension
{
    public function getDefinitionClass(): string
    {
        return CountryStateDefinition::class;
    }
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToManyAssociationField(
                'swag',
                SwagDefinition::class,
                'state_id'
            )
        );
    }
}
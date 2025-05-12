<?php declare(strict_types=1);

namespace Task\Core\Content\Swag;

use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition;
use Shopware\Core\System\Country\CountryDefinition;
use Symfony\Bridge\Twig\Node\TransNode;
use Task\Core\Content\Swag\Aggregate\TaskTranslationDefinition;

class SwagDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'swag';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return SwagEntity::class;
    }

    public function getCollectionClass(): string
    {
        return SwagCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            new TranslatedField('name'), 
            (new TranslationsAssociationField(
                TaskTranslationDefinition::class,
                'swag_id',
            )),
            (new TranslatedField('city')),
            (new TranslationsAssociationField(
                TaskTranslationDefinition::class,
                'swag_id',
            )),
            new FkField('country', 'country', CountryDefinition::class),
            new FkField('state', 'state', CountryStateDefinition::class),
            new FkField('image', 'image', MediaDefinition::class),
            (new FkField('product', 'product', ProductDefinition::class)),
            (new BoolField('active', 'active'))
        ]);
    }
}

<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;
use Amethyst\Managers\ShipmentZoneManager;
use Amethyst\Managers\AddressManager;

class DeliverySchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('uid')
                ->setDefault(function ($entity, $attribute) {
                    return $attribute->getManager()->getRepository()->generateUid();
                }),
            Attributes\TextAttribute::make('session_id'),
            Attributes\BelongsToAttribute::make('address_id')
                ->setRelationName('address')
                ->setRelationManager(AddressManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('shipment_zone_id')
                ->setRelationName('shipment_zone')
                ->setRelationManager(ShipmentZoneManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getMorphListable('delivery', 'target'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getMorphRelationable('delivery', 'target'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
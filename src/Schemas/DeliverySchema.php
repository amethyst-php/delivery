<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\AddressManager;
use Amethyst\Managers\ShipmentZoneManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

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
            Attributes\UuidAttribute::make('uuid')
                ->setFillable(false),
            Attributes\TextAttribute::make('code'),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\TextAttribute::make('phone'),
            Attributes\TextAttribute::make('session_id'),
            Attributes\BelongsToAttribute::make('address_id')
                ->setRelationName('address')
                ->setRelationManager(AddressManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('shipment_zone_id')
                ->setRelationName('shipment_zone')
                ->setRelationManager(ShipmentZoneManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getDataNames())
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\LongTextAttribute::make('notes'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}

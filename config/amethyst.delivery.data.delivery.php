<?php

return [
    'table'      => 'amethyst_deliveries',
    'comment'    => 'Delivery',
    'model'      => Amethyst\Models\Delivery::class,
    'schema'     => Amethyst\Schemas\DeliverySchema::class,
    'repository' => Amethyst\Repositories\DeliveryRepository::class,
    'serializer' => Amethyst\Serializers\DeliverySerializer::class,
    'validator'  => Amethyst\Validators\DeliveryValidator::class,
    'authorizer' => Amethyst\Authorizers\DeliveryAuthorizer::class,
    'faker'      => Amethyst\Fakers\DeliveryFaker::class,
    'manager'    => Amethyst\Managers\DeliveryManager::class,
];

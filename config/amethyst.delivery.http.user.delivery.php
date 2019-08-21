<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\User\DeliveriesController::class,
    'router'     => [
        'as'     => 'delivery.',
        'prefix' => '/deliveries',
    ],
];

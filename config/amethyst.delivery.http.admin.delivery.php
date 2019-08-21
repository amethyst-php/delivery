<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\DeliveriesController::class,
    'router'     => [
        'as'     => 'delivery.',
        'prefix' => '/deliveries',
    ],
];

<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class DeliveryAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'delivery.create',
        Tokens::PERMISSION_UPDATE => 'delivery.update',
        Tokens::PERMISSION_SHOW   => 'delivery.show',
        Tokens::PERMISSION_REMOVE => 'delivery.remove',
    ];
}

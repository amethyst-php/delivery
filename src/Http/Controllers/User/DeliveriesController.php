<?php

namespace Amethyst\Http\Controllers\User;

use Amethyst\Api\Http\Controllers\RestManagerController;
use Amethyst\Api\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\DeliveryManager;
use Illuminate\Http\Request;

class DeliveriesController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = DeliveryManager::class;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        parent::__construct();
    }
}

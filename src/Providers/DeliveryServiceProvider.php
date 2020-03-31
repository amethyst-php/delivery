<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;

class DeliveryServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\AddressServiceProvider::class);
        $this->app->register(\Amethyst\Providers\PriceServiceProvider::class);
        $this->app->register(\Amethyst\Providers\TimeRangeServiceProvider::class);
        $this->app->register(\Amethyst\Providers\ShipmentZoneServiceProvider::class);
        $this->app->register(\Amethyst\Providers\OwnerServiceProvider::class);
    }
}

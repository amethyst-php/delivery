<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class DeliveryServiceProvider extends CommonServiceProvider
{  	
	/**
	 * @inherit
	 */
	public function boot()
    {
    	parent::boot();

        app('amethyst')->pushMorphRelation('price', 'target', 'delivery');
        app('amethyst')->pushMorphRelation('time-range', 'target', 'delivery');
        app('amethyst')->pushMorphRelation('owner', 'target', 'delivery');
    
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
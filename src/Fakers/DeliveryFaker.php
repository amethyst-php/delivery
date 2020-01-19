<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class DeliveryFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('session_id', $faker->name);
        $bag->set('name', $faker->name);
        $bag->set('code', $faker->name);
        $bag->set('phone', $faker->name);
        $bag->set('notes', $faker->name);
        $bag->set('address', AddressFaker::make()->parameters()->toArray());
        $bag->set('shipment_zone', ShipmentZoneFaker::make()->parameters()->toArray());
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}

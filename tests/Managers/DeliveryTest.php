<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\DeliveryFaker;
use Amethyst\Managers\DeliveryManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class DeliveryTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = DeliveryManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = DeliveryFaker::class;
}

<?php

namespace Amethyst\Repositories;

use Railken\Lem\Repository;
use Ramsey\Uuid\Uuid;

class DeliveryRepository extends Repository
{   
	/**
     * Generate token.
     *
     * @return string
     */
    public function generateUid()
    {
        do {
            $uid = Uuid::uuid4()->toString();
        } while ($this->getQuery()->where('uid', $uid)->count() > 0);

        return $uid;
    }
}

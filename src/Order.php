<?php

declare(strict_types=1);

namespace Mguinea\Criteria;

class Order
{
    public function __construct(
        public readonly OrderType $orderType,
        public readonly string $orderBy
    ) {
    }
}

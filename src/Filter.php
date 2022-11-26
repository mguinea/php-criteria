<?php

declare(strict_types=1);

namespace Mguinea\Criteria;

class Filter
{
    public function __construct(
        public readonly string $field,
		public readonly FilterOperator $operator,
		public readonly mixed $value
    ) {
    }
}

<?php

declare(strict_types=1);

namespace Tests;

use Mguinea\Criteria\Criteria;
use PHPUnit\Framework\TestCase;

final class CriteriaTest extends TestCase
{
	public function testCriteriaHasRequiredAttributes(): void
	{
		$this->assertClassHasAttribute('filters', Criteria::class);
		$this->assertClassHasAttribute('orderList', Criteria::class);
		$this->assertClassHasAttribute('offset', Criteria::class);
		$this->assertClassHasAttribute('limit', Criteria::class);
	}
}

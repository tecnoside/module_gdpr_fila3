<?php

namespace Tests\Unit;

use CreateConsentsTable;
use Tests\TestCase;

/**
 * Class CreateConsentsTableTest.
 *
 * @covers \CreateConsentsTable
 */
final class CreateConsentsTableTest extends TestCase
{
    private CreateConsentsTable $createConsentsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createConsentsTable = new CreateConsentsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createConsentsTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}

<?php

namespace Tests\Unit;

use CreateGdprEventsTable;
use Tests\TestCase;

/**
 * Class CreateGdprEventsTableTest.
 *
 * @covers \CreateGdprEventsTable
 */
final class CreateGdprEventsTableTest extends TestCase
{
    private CreateGdprEventsTable $createGdprEventsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createGdprEventsTable = new CreateGdprEventsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createGdprEventsTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}

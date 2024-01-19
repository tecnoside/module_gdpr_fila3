<?php

namespace Modules\Gdpr\Tests\Unit\Database\Factories;

use Modules\Gdpr\Database\Factories\ConsentFactory;
use Tests\TestCase;

/**
 * Class ConsentFactoryTest.
 *
 * @covers \Modules\Gdpr\Database\Factories\ConsentFactory
 */
final class ConsentFactoryTest extends TestCase
{
    private ConsentFactory $consentFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->consentFactory = new ConsentFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->consentFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}

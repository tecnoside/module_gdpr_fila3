<?php

namespace Modules\Gdpr\Tests\Unit\Database\Factories;

use Modules\Gdpr\Database\Factories\TreatmentFactory;
use Tests\TestCase;

/**
 * Class TreatmentFactoryTest.
 *
 * @covers \Modules\Gdpr\Database\Factories\TreatmentFactory
 */
final class TreatmentFactoryTest extends TestCase
{
    private TreatmentFactory $treatmentFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->treatmentFactory = new TreatmentFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->treatmentFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}

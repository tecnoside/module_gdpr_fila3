<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Gdpr\Models\Consent;

class ConsentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Consent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
        ];
    }
}

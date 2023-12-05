<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 7405a7d4 (first)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4a1eeab7 (Lint)
use Modules\Gdpr\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Model>
=======
     * @var class-string<\Illuminate\Database\Eloquent\Model>
>>>>>>> 7405a7d4 (first)
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4a1eeab7 (Lint)
     */
    public function definition(): array
    {
        return [
=======
     *
     * @return array
     */
    public function definition()
    {

        return [

>>>>>>> 7405a7d4 (first)
        ];
    }
}

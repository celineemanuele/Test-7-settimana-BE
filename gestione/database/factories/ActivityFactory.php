<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ['Toning Activity', 'Aerobic Activity', 'Holistic and Postural Activities'];

return [
   'name'=> fake()->randomElement($name),
   'description' => fake()->text(200),
   'start_time' => fake()->dateTimeBetween('16:00', '19:00')->format('H:i'),
   'end_time' => function (array $attributes) {
       $startTime = \DateTime::createFromFormat('H:i', $attributes['start_time']);
       return fake()->dateTimeBetween($startTime->modify('+1 hour'), '20:00')->format('H:i');
   },
   'course_id' => Course::get()->random()->id,
];
    }
}

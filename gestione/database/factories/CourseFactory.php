<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model= Course ::class;
    
    public function definition(): array
    {
        $name = ['Body Sculpity', 'Power Workout', 'Step', 'Spinning', 'Zumba', 'Pilates','Yoga'];
    
        
        return [
            'name'=> fake()->randomElement($name),
            'description' => fake() -> text(200),
        ];
    }
}

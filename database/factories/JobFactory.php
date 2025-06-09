<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 use App\Models\Employer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement( [ '$50,000 USD', '$30,000 USD', '$60,000 USD']),
            'location' => fake()->randomElement( [ 'Remote', 'Germany', 'Portugal', 'London']),
            'schedule' => fake()->randomElement( [ 'Full Time', 'Part Time', 'Freelancer']),
            'url' => fake()->url,
            'featured' => fake()->randomElement( [ false, true ]),
        ];
    }
}

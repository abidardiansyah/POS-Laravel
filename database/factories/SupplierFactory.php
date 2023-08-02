<?php
namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate a random city code based on the first three letters of the city name
        $cityCode = strtoupper(substr($this->faker->city, 0, 3));
        // Generate a random number as a suffix
        $randomNumber = $this->faker->unique()->numberBetween(1, 999);
        // Combine the city code and random number to form the code
        $code = $cityCode . sprintf('%03d', $randomNumber);

        return [
            'code' => $code,
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['active', 'Non-Active']),
        ];
    }
}


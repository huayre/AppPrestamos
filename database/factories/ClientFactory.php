<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_document' => $this->faker->randomElement(['DNI', 'RUC']),
            'number_document' => mt_rand(100000000, 999999999),
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'sex' => $this->faker->randomElement(['MASCULINO', 'FEMENINO']),
            'direction' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'occupation' => $this->faker->randomElement(['VENDEDOR', 'MOTOTAXISTA','COMERCIANTE','AGRICULTOR']),

        ];
    }
}

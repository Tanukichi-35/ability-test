<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->numberBetween(1,2);
        if($gender === 1)
            $first_name= $this->faker->firstName('male');
        else
            $first_name= $this->faker->firstName('female');
        $address = $this->faker->city.$this->faker->streetAddress;
        $datetime = $this->faker->dateTime;

        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'first_name' => $first_name,
            'last_name' => $this->faker->lastName,
            'gender' => $gender,
            'email' => $this->faker->email,
            'tell' => $this->faker->phoneNumber,
            'address' => $address,
            'building' => $this->faker->secondaryAddress,
            'detail' => $this->faker->realText($maxNbChars = 120),
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}

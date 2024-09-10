<?php
// Random.php

require_once '../vendor/autoload.php';

use Faker\Factory;

class Random {
    private $faker;

    public function __construct() {
        $this->faker = Factory::create('en_PH');
    }

    public function generatePerson() {
        return [
            'UUID' => $this->faker->uuid,
            'Title' => $this->faker->title,
            'First Name' => $this->faker->firstName,
            'Last Name' => $this->faker->lastName,
            'Street Address' => $this->faker->streetAddress,
            'Barangay' => $this->faker->citySuffix,
            'Municipality' => $this->faker->city,
            'Province' => $this->faker->state,
            'Country' => $this->faker->country,
            'Phone Number' => $this->faker->phoneNumber,
            'Mobile Number' => $this->faker->phoneNumber,
            'Company Name' => $this->faker->company,
            'Company Website' => $this->faker->url,
            'Job Title' => $this->faker->jobTitle,
            'Favorite Color' => $this->faker->safeColorName,
            'Birthdate' => $this->faker->date,
            'Email Address' => $this->faker->email,
            'Password' => $this->faker->password,
        ];
    }
}
?>
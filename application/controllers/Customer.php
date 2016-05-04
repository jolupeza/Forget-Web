<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Frontend_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Can only be run in the development environment
        if (ENVIRONMENT !== 'development') {
            exit('Wowsers! You don\'t want to do that!');
        }

        $this->faker = Faker\Factory::create();

        $this->load->model('Customer_model');
    }

    public function seed()
    {
        $this->Customer_model->truncate();

        for ($i = 0; $i < 51; $i++) {
            $data = [
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->email,
                'phone' => $this->faker->randomNumber(9)
            ];

            $this->Customer_model->save($data);
        }

        echo 'Seeder worked!';
    }
}
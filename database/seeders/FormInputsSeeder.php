<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormInput;

class FormInputsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data - adjust as needed
        $formInputsData = [
            [
                'label' => 'Name',
                'name' => 'name',
                'type' => 'text',
                'placeholder' => 'Enter Name',
                'form_id' => 'name',
            ],
            [
                'label' => 'Email address',
                'name' => 'email',
                'type' => 'email',
                'placeholder' => 'Enter email',
                'form_id' => 'email',
            ],
            [
                'label' => 'Password',
                'name' => 'password',
                'type' => 'password',
                'placeholder' => 'Password',
                'form_id' => 'address',
            ],
            // Add more entries as needed
        ];

        // Insert data into the form_inputs table
        foreach ($formInputsData as $data) {
            FormInput::create($data);
        }
    }
}

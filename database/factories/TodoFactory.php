<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    

     protected $model = \App\Models\Todo::class;

     
     /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //[
        'name'=>$this->faker->sentence(3),
        'description'=>$this->faker->paragraph(4),
        'completed'=>false
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\ToDoList;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ToDoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_name'=>$this->faker->sentence([2]),
            'description'=>$this->faker->paragraph,
            'schedule'=>$this->faker->dateTimeInInterval('+3 week')
        ];
    }
}

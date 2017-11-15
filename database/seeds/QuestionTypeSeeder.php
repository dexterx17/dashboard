<?php

use Illuminate\Database\Seeder;

use App\Question_type;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Question_type::class)->create([
        	'type' => 'M'
        ]);
        factory(Question_type::class)->create([
        	'type' => 'O'
        ]);
        factory(Question_type::class)->create([
        	'type' => 'S'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class TricksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Trick::class, 30)->create();
    }
}

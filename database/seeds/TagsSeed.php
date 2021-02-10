<?php

use Illuminate\Database\Seeder;

class TagsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Tags::class, 15)->create();  
    }
}

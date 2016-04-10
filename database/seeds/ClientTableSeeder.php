<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \CodeProject\Client::truncate();

        Factory(\CodeProject\Client::class, 10)->create();

    }
}

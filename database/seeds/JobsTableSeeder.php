<?php

use Illuminate\Database\Seeder;
use App\Jobs;
class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Jobs::class,10)->create();
    }
}

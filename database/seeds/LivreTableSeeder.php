<?php

use Illuminate\Database\Seeder;
use App\Livre;

class LivreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Livre::truncate();
        factory(App\Livre::class, 10)->create();
    }
}

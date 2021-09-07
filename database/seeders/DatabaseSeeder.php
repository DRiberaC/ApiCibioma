<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Admin::class);
        $this->call(Tipos::class);
        $this->call(Carpoteca::class);
        $this->call(Entomologia::class);
        $this->call(Germoteca::class);
        $this->call(Herbario::class);
        $this->call(Palinoteca::class);
        $this->call(Xiloteca::class);
    }
}

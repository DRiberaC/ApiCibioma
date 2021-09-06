<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nombre' => 'carpoteca']);
        Tipo::create(['nombre' => 'entomologia']);
        Tipo::create(['nombre' => 'germoteca']);
        Tipo::create(['nombre' => 'herbario']);
        Tipo::create(['nombre' => 'palinoteca']);
        Tipo::create(['nombre' => 'xiloteca']);
    }
}

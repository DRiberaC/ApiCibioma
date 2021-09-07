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
        Tipo::create(['nombre' => 'Carpoteca']);
        Tipo::create(['nombre' => 'Entomología']);
        Tipo::create(['nombre' => 'Germoteca']);
        Tipo::create(['nombre' => 'Herbario']);
        Tipo::create(['nombre' => 'Palinoteca']);
        Tipo::create(['nombre' => 'Xiloteca']);
    }
}

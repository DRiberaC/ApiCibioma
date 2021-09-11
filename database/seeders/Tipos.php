<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nombre' => 'Carpoteca','slug' => Str::slug('Carpoteca')]);
        Tipo::create(['nombre' => 'Entomología','slug' => Str::slug('Entomología')]);
        Tipo::create(['nombre' => 'Germoteca','slug' => Str::slug('Germoteca')]);
        Tipo::create(['nombre' => 'Herbario','slug' => Str::slug('Herbario')]);
        Tipo::create(['nombre' => 'Palinoteca','slug' => Str::slug('Palinoteca')]);
        Tipo::create(['nombre' => 'Xiloteca','slug' => Str::slug('Xiloteca')]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Muestra extends Model
{
    use HasFactory;

    //protected $guarded = ['id'];
    protected $allowFilter = ['tipo_id','codigo_y_n_de_coleccion'];

    public function getRouteKeyName()
    {
        return 'codigo_y_n_de_coleccion';
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    
    public function scopeFilter(Builder $query)
    {
        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters =request('filter');
        $allowFilter= collect($this->allowFilter);
        foreach ($filters as $filter => $value) {
            if ($allowFilter->contains($filter)) {
                $query->where($filter, 'LIKE', "%$value%");
            }
        }
    }
}

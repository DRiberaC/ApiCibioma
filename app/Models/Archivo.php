<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $table = "files";
    
    protected $guarded = ['id'];

    public function filetable()
    {
        return $this->morphTo();
    }
}

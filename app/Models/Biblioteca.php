<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;
    protected $table = "biblioteca";
    protected $guarded = ['id'];
    public function image()
    {
        return $this->morphOne(Image::class, 'imagetable');
    }
    public function file()
    {
        return $this->morphOne(Archivo::class, 'filetable');
    }
}

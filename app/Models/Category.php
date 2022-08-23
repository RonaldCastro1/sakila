<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "category";
    //La clave primaria de la tabla
    protected $primaryKey = "category_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion M:M con film
    public function film(){
        return $this->belongsToMany(Film::class,'film_category','category_id','film_id');
    }
}

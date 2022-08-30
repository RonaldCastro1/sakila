<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "actor";
    //La clave primaria de la tabla
    protected $primaryKey = "actor_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion M:M con film
    public function film(){
        return $this->belongsToMany(Film::class,'film_actor','actor_id','film_id');
    }
}

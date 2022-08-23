<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "inventory";
    //La clave primaria de la tabla
    protected $primaryKey = "inventory_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion con film
    public function film(){
        return $this->belongsTo(Film::class,'film_id');
    }
}

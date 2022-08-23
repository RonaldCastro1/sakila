<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "city";
    //La clave primaria de la tabla
    protected $primaryKey = "city_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion con country
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "country";
    //La clave primaria de la tabla
    protected $primaryKey = "country_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion 1:M con City
    Public function city(){
        return $this->hasMany(City::class,'country_id');
    }
}

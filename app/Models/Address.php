<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "address";
    //La clave primaria de la tabla
    protected $primaryKey = "address_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
}

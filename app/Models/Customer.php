<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "customer";
    //La clave primaria de la tabla
    protected $primaryKey = "customer_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "film";
    //La clave primaria de la tabla
    protected $primaryKey = "film_id";
    //omitir verificaiones de campos
    public $timestamps = false;
    use HasFactory;
    //Relacion 1:M con Inventory
    Public function inventory(){
        return $this->hasMany(Inventory::class,'film_id');
    }
    //Relacion M:M con category
    public function category(){
        return $this->belongsToMany(Category::class,'film_category','film_id','category_id');
    }
    //Relacion M:M con actor
    public function actor(){
        return $this->belongsToMany(Actor::class,'film_actor','film_id','actor_id');
    }
}

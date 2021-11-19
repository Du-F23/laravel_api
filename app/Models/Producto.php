<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'producto'
        ,'existencias'
        ,'precio'
        ,'fotografia'
        ,'descripcion'
        ,'estatus'
        ,'iva'
    ];

    public static function reglas (){
        return [
            'producto'=> 'required|max:45'
                ,'existencias' => 'required | integer | min:0'
                ,'precio'=> 'required | numeric | min:0'
                ,'fotografia'=> 'required | max:45'
                ,'descripcion'=> 'required | max:100'
                ,'estatus'=> 'required | in:Activo, Inactivo'
                ,'iva'=> 'required | numeric | min:0'
        ];

    }
}

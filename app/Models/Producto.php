<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'codigo', 'nombre', 'descripcion', 'cantidad', 'precio', 'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class);
    }
}

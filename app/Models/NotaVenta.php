<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    protected $table = 'nota_ventas';
    use HasFactory;
    protected $fillable = ['total', 'detalle', 'estado'];

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'nota_venta_id');
    }
}

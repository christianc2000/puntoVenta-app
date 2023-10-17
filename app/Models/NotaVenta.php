<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    protected $table = 'nota_ventas';
    use HasFactory;
    protected $fillable = ['total', 'estado'];

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'nota_venta_id');
    }
    public static function getOrderFechaDesc()
    {
        return static::orderBy('updated_at', 'desc')->get();
    }
}

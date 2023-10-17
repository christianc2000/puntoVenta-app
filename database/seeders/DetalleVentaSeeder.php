<?php

namespace Database\Seeders;

use App\Models\DetalleVenta;
use Illuminate\Database\Seeder;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalles_venta = [
            [
                'precio_unitario'=>2,
                'cantidad'=>100,
                'sub_total'=>200,
                'recomendado'=>false,
                'producto_id'=>1,
                'nota_venta_id'=>1
            ],
            [
                'precio_unitario'=>3,
                'cantidad'=>100,
                'sub_total'=>300,
                'recomendado'=>false,
                'producto_id'=>3,
                'nota_venta_id'=>1
            ],
            [
                'precio_unitario'=>1.5,
                'cantidad'=>20,
                'sub_total'=>30,
                'recomendado'=>false,
                'producto_id'=>2,
                'nota_venta_id'=>2
            ],
            [
                'precio_unitario'=>2,
                'cantidad'=>50,
                'sub_total'=>100,
                'recomendado'=>false,
                'producto_id'=>1,
                'nota_venta_id'=>2
            ],
            [
                'precio_unitario'=>4,
                'cantidad'=>5,
                'sub_total'=>20,
                'recomendado'=>false,
                'producto_id'=>10,
                'nota_venta_id'=>2
            ]
        ];
        foreach ($detalles_venta as $dv) {
            DetalleVenta::create($dv);
        }
    }
}

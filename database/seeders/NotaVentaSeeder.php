<?php

namespace Database\Seeders;

use App\Models\NotaVenta;
use Illuminate\Database\Seeder;

class NotaVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotaVenta::create([
            "total" => 500,
            "estado"=>true,
            "detalle" => "Venta 1 del día"
        ]);
        NotaVenta::create([
            "total" => 150,
            "estado"=>true,
            "detalle" => "Venta 1 del día"
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CategoriaModel;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                "nombre" => "Frutas y Verduras",
            ],
            [
                "nombre" => "Lácteos",
            ],
            [
                "nombre" => "Carnes y Embutidos",
            ],
            [
                "nombre" => "Panadería y Pastelería",
            ],
            [
                "nombre" => "Abarrotes",
            ],
            [
                "nombre" => "Bebidas y Refrescos",
            ],
            [
                "nombre" => "Higiene y Cuidado Personal",
            ],
            [
                "nombre" => "Limpieza del Hogar",
            ],
            [
                "nombre" => "Electrodomésticos",
            ],
            [
                "nombre" => "Productos de Limpieza",
            ],
            [
                "nombre" => "Ropa y Calzado",
            ],
            [
                "nombre" => "Electrónicos",
            ],
            [
                "nombre" => "Juguetes y Entretenimiento",
            ],
            [
                "nombre" => "Material Escolar y Oficina",
            ],
            [
                "nombre" => "Productos para Mascotas",
            ],
            [
                "nombre" => "Herramientas y Construcción",
            ],
            [
                "nombre" => "Productos de Belleza",
            ],
            [
                "nombre" => "Productos Orgánicos",
            ],
            [
                "nombre" => "Accesorios para el Hogar",
            ],
            [
                "nombre" => "Arte y Manualidades",
            ]
        ];
        foreach ($categorias as $categoria) {
            CategoriaModel::create($categoria);
        }
    }
}

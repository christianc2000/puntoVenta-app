<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                "codigo" => "P0001",
                "nombre" => "Manzanas frescas",
                "descripcion" => "Frutas del día",
                "cantidad" => 36,
                "precio" => 2,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0002",
                "nombre" => "Plátanos maduros",
                "descripcion" => "Deliciosos plátanos listos para comer",
                "cantidad" => 42,
                "precio" => 1.5,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0003",
                "nombre" => "Naranjas jugosas",
                "descripcion" => "Naranjas frescas y llenas de sabor",
                "cantidad" => 30,
                "precio" => 3,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0004",
                "nombre" => "Zanahorias orgánicas",
                "descripcion" => "Zanahorias cultivadas de forma orgánica",
                "cantidad" => 25,
                "precio" => 2.5,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0005",
                "nombre" => "Tomates frescos",
                "descripcion" => "Tomates maduros y jugosos",
                "cantidad" => 28,
                "precio" => 2.8,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0006",
                "nombre" => "Lechugas crujientes",
                "descripcion" => "Lechugas frescas y crujientes para ensaladas",
                "cantidad" => 50,
                "precio" => 2.2,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0007",
                "nombre" => "Pimientos rojos",
                "descripcion" => "Pimientos rojos para cocinar",
                "cantidad" => 40,
                "precio" => 3.5,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0008",
                "nombre" => "Papas seleccionadas",
                "descripcion" => "Papas de calidad seleccionadas a mano",
                "cantidad" => 45,
                "precio" => 2.2,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0009",
                "nombre" => "Pepinos frescos",
                "descripcion" => "Pepinos frescos para ensaladas",
                "cantidad" => 35,
                "precio" => 1.8,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0010",
                "nombre" => "Uvas dulces",
                "descripcion" => "Uvas frescas y dulces",
                "cantidad" => 24,
                "precio" => 4,
                "categoria_id" => 1
            ],
            [
                "codigo" => "P0011",
                "nombre" => "Leche entera",
                "descripcion" => "Leche fresca y entera",
                "cantidad" => 40,
                "precio" => 2.5,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0012",
                "nombre" => "Queso cheddar",
                "descripcion" => "Queso cheddar maduro y delicioso",
                "cantidad" => 20,
                "precio" => 5.2,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0013",
                "nombre" => "Yogur natural",
                "descripcion" => "Yogur natural sin sabores añadidos",
                "cantidad" => 30,
                "precio" => 1.8,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0014",
                "nombre" => "Mantequilla cremosa",
                "descripcion" => "Mantequilla suave y cremosa",
                "cantidad" => 25,
                "precio" => 3.0,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0015",
                "nombre" => "Crema fresca",
                "descripcion" => "Crema fresca para cocinar",
                "cantidad" => 20,
                "precio" => 2.5,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0016",
                "nombre" => "Leche de almendras",
                "descripcion" => "Leche de almendras para dietas especiales",
                "cantidad" => 25,
                "precio" => 3.2,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0017",
                "nombre" => "Queso cottage",
                "descripcion" => "Queso cottage bajo en grasa",
                "cantidad" => 18,
                "precio" => 2.0,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0018",
                "nombre" => "Yogur de frutas",
                "descripcion" => "Yogur de frutas variadas",
                "cantidad" => 30,
                "precio" => 1.9,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0019",
                "nombre" => "Leche deslactosada",
                "descripcion" => "Leche sin lactosa para intolerantes",
                "cantidad" => 22,
                "precio" => 3.0,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0020",
                "nombre" => "Queso de cabra",
                "descripcion" => "Queso de cabra de alta calidad",
                "cantidad" => 15,
                "precio" => 4.5,
                "categoria_id" => 2
            ],
            [
                "codigo" => "P0021",
                "nombre" => "Filete de res",
                "descripcion" => "Filete de res fresco y de alta calidad",
                "cantidad" => 30,
                "precio" => 12.5,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0022",
                "nombre" => "Pechuga de pollo",
                "descripcion" => "Pechuga de pollo sin hueso ni piel",
                "cantidad" => 40,
                "precio" => 8.2,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0023",
                "nombre" => "Jamón de cerdo",
                "descripcion" => "Jamón de cerdo ahumado y delicioso",
                "cantidad" => 25,
                "precio" => 7.5,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0024",
                "nombre" => "Salchichas ahumadas",
                "descripcion" => "Salchichas ahumadas para parrilladas",
                "cantidad" => 30,
                "precio" => 6.0,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0025",
                "nombre" => "Carne molida",
                "descripcion" => "Carne molida fresca para hamburguesas",
                "cantidad" => 20,
                "precio" => 9.5,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0026",
                "nombre" => "Chorizos picantes",
                "descripcion" => "Chorizos picantes para asar",
                "cantidad" => 25,
                "precio" => 6.8,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0027",
                "nombre" => "Tocino crujiente",
                "descripcion" => "Tocino crujiente para desayunos",
                "cantidad" => 15,
                "precio" => 5.0,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0028",
                "nombre" => "Pavo fresco",
                "descripcion" => "Pavo fresco y jugoso",
                "cantidad" => 35,
                "precio" => 10.2,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0029",
                "nombre" => "Salami italiano",
                "descripcion" => "Salami italiano de calidad premium",
                "cantidad" => 18,
                "precio" => 8.0,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0030",
                "nombre" => "Costillas de cerdo",
                "descripcion" => "Costillas de cerdo para barbacoa",
                "cantidad" => 22,
                "precio" => 11.5,
                "categoria_id" => 3
            ],
            [
                "codigo" => "P0031",
                "nombre" => "Pan integral",
                "descripcion" => "Pan integral fresco y saludable",
                "cantidad" => 40,
                "precio" => 3.5,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0032",
                "nombre" => "Croissants recién horneados",
                "descripcion" => "Croissants recién horneados y deliciosos",
                "cantidad" => 35,
                "precio" => 2.8,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0033",
                "nombre" => "Pastel de chocolate",
                "descripcion" => "Pastel de chocolate para los amantes del chocolate",
                "cantidad" => 15,
                "precio" => 12.0,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0034",
                "nombre" => "Donas glaseadas",
                "descripcion" => "Donas glaseadas con diferentes sabores",
                "cantidad" => 20,
                "precio" => 1.5,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0035",
                "nombre" => "Baguettes crujientes",
                "descripcion" => "Baguettes crujientes recién horneados",
                "cantidad" => 30,
                "precio" => 4.0,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0036",
                "nombre" => "Galletas de avena",
                "descripcion" => "Galletas de avena caseras y saludables",
                "cantidad" => 50,
                "precio" => 2.2,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0037",
                "nombre" => "Tarta de manzana",
                "descripcion" => "Tarta de manzana casera y deliciosa",
                "cantidad" => 25,
                "precio" => 9.5,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0038",
                "nombre" => "Panecillos de canela",
                "descripcion" => "Panecillos de canela recién horneados",
                "cantidad" => 45,
                "precio" => 3.8,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0039",
                "nombre" => "Pan pita fresco",
                "descripcion" => "Pan pita fresco y versátil",
                "cantidad" => 60,
                "precio" => 2.0,
                "categoria_id" => 4
            ],
            [
                "codigo" => "P0040",
                "nombre" => "Muffins de arándanos",
                "descripcion" => "Muffins de arándanos esponjosos",
                "cantidad" => 35,
                "precio" => 3.3,
                "categoria_id" => 4
            ]
        ];
        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}

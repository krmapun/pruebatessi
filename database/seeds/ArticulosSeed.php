<?php

use Illuminate\Database\Seeder;
use App\Categoria;
use App\Articulos;

class ArticulosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_Cate1 = Categoria::where('nombre','1-Software')->first();
        $id_Cate2 = Categoria::where('nombre','2-Hardware')->first();
        $id_Cate3 = Categoria::where('nombre','3-Maquinas')->first();
        $id_Cate4 = Categoria::where('nombre','4-Quimicos')->first();
        $id_Cate5 = Categoria::where('nombre','5-Otros')->first();

        $articulo = new Articulos();
        $articulo->num_registro = 65;
        $articulo->nombre = 'Cafe Instantaneo';
        $articulo->cantidad = 5;
        $articulo->id_categoria = 2;
        $articulo->save();

        
        $articulo = new Articulos();
        $articulo->num_registro = 64;
        $articulo->nombre = 'Ubuntu';
        $articulo->cantidad = 1;
        $articulo->id_categoria = 3;
        $articulo->save();

        
        $articulo = new Articulos();
        $articulo->num_registro = 63;
        $articulo->nombre = 'HP probook 430G5';
        $articulo->cantidad = 12;
        $articulo->id_categoria = 4;
        $articulo->save();


        
        $articulo = new Articulos();
        $articulo->num_registro = 62;
        $articulo->nombre = 'WinServer';
        $articulo->cantidad = 5;
        $articulo->id_categoria = 3;
        $articulo->save();


        
        $articulo = new Articulos();
        $articulo->num_registro = 61;
        $articulo->nombre = 'Limpiador';
        $articulo->cantidad = 5;
        $articulo->id_categoria = 3;
        $articulo->save();


        
        $articulo = new Articulos();
        $articulo->num_registro = 60;
        $articulo->nombre = 'Cafetera';
        $articulo->cantidad = 1;
        $articulo->id_categoria = 4;
        $articulo->save();


        
        $articulo = new Articulos();
        $articulo->num_registro = 59;
        $articulo->nombre = 'MAC';
        $articulo->cantidad = 2;
        $articulo->id_categoria = 6;
        $articulo->save();


        
        $articulo = new Articulos();
        $articulo->num_registro = 58;
        $articulo->nombre = 'Trapero';
        $articulo->cantidad = 1;
        $articulo->id_categoria = 5;
        $articulo->save();
    }
}

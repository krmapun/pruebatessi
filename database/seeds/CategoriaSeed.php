<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = new Categoria();
        $categorias->nombre = "1-Software";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->nombre = "2-Hardware";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->nombre = "3-Maquinas";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->nombre = "4-Quimicos";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->nombre = "5-Otros";
        $categorias->save();
    }
}

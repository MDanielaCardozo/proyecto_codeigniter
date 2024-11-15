<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        // Instanciar el modelo ProductosModel
        $productosModel = new ProductosModel();
        
        // Obtener todos los productos de la base de datos
        $productos = $productosModel -> findAll();

        // Cargar la vista 'index' y pasarle los datos del producto
        return view('productos/index', ['productos' => $productos]);
    }
}
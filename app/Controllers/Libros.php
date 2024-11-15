<?php

namespace App\Controllers;

use App\Models\LibrosModel;

class Libros extends BaseController
{
    public function index()
    {
        // Instanciar el modelo LibrosModel
        $librosModel = new LibrosModel();
        
        // Obtener todos los Libros de la base de datos
        $libros = $librosModel -> findAll();

        // Cargar la vista 'index' y pasarle los datos del producto
        return view('libros/index', ['libros' => $libros]);
    }

    public function ver($id)
    {
        // Cargar el modelo de LibrosModel
        $librosModel = new LibrosModel();

        // Obtener el producto desde la base de dato por su ID
        $libro = $librosModel -> find($id);

        // Verificar si el producto existe
        if($libro === null){
            return redirect()->to(base_url('libros')) -> with ('error', 'Producto no encontrado');

            // Cargamos la vista 'ver y pasar los datos del producto
        }
        return view('libros/ver', ['libro' => $libro]);
    }
}
<?php
 
 namespace App\Controllers;

 class Tienda extends BaseController
 {
    public function index(): string
    {
        $data['productos'] =
        [
            ['nombre' => 'libro', 'precio' => 3000],
            ['nombre' => 'libro', 'precio' => 3000],
        ];
        return view('tienda', $data);
    }
 }

?>
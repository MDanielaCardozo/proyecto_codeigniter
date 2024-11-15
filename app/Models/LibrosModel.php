<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $allowFields = ['titulo', 'immagen', 'precio'];
}

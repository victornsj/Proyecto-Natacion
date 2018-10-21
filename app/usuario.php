<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'IdUsuario';  
   protected $fillable=['IdUsuario','Nombre','ApellidoPaterno','ApellidoMaterno','Telefono',
                       'Correo','Contrasena','Tipo'];
    protected $date=['deleted_at'];
}

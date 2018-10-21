<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $table = "cursos";
    protected $primaryKey = 'IdCurso';  
   protected $fillable=['IdCurso','FechaInicio','FechaFinal','IdNivel','IdInstructor'];
}

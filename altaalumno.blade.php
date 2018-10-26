
@extends('sistema.principal')


@section('contenido')


<br>
<form action = '{{route('guardaalumno')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

<div class="content">
            <div class="animated fadeIn">
				
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">Altas de Alumnos</div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="">
                                <div class="form-group">
                                    

                                    <div class="input-group">
//Hola publico
@if($errors->first('IdAlumno')) 
<i> {{ $errors->first('IdAlumno') }} </i> 
@endif	<br>
         
                                        <div class="input-group-addon">ID Alumno</div>
                                        <input type="text" id="username3" name="IdAlumno" class="form-control" value="{{$IdAlumnos}}" readonly ='readonly'>
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Nombre del Alumno</div>
                                        <input type="text"  name="Nombre" class="form-control" value="{{old('Nombre')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('Nombre')) 
                                             <i> {{ $errors->first('Nombre') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>


                                              <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Apellido Paterno</div>
                                        <input type="text"  name="ApellidoPaterno" class="form-control" value="{{old('ApellidoPaterno')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('ApellidoPaterno')) 
                                             <i> {{ $errors->first('ApellidoPaterno') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>

                                              <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Apellido Materno</div>
                                        <input type="text"  name="ApellidoMaterno" class="form-control" value="{{old('ApellidoMaterno')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('ApellidoMaterno')) 
                                             <i> {{ $errors->first('ApellidoMaterno') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>


                                              <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Calle</div>
                                        <input type="text"  name="Calle" class="form-control" value="{{old('Calle')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('Calle')) 
                                             <i> {{ $errors->first('Calle') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>

                                 <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Colonia</div>
                                        <input type="text"  name="Colonia" class="form-control" value="{{old('Colonia')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('Colonia')) 
                                             <i> {{ $errors->first('Colonia') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>

                                  <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Municipio</div>
                                        <input type="text"  name="Municipio" class="form-control" value="{{old('Municipio')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('Municipio')) 
                                             <i> {{ $errors->first('Municipio') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>


                                    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Sexo</div>
										<input type="radio"  name="Tipo" class="form-control" value = 'Administrador'>Masculino
										<input type="radio"  name="Tipo" class="form-control" value = 'Usuario Sin Permisos'>Femenino
                                        
									<br>
									</div>
								</div>




                                              <div class="form-group">
                                    <div class="input-group">
									
                                        <div class="input-group-addon">Fecha de Nacimiento</div>
                                        <input type="text"  name="FechaNacimiento" class="form-control" value="{{old('FechaNacimiento')}}">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
																	@if($errors->first('FechaNacimiento')) 
                                             <i> {{ $errors->first('FechaNacimiento') }} </i><br>
                                             @endif	
                                              </div>
                                             </div>


                                             <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Seleccione el Nivel</div>
                                        <select name = 'IdNivel'>
                                        @foreach($niveles as $niv)
			                            <option value = '{{$niv->IdNivel}}'>{{$niv->Nivel}}</option>
			                            @endforeach
                                             </select>
                                              </div>
                                             </div>


                                               <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Historial Medico</div><input type= 'file' name = 'HistorialMedico'>
                                        @if($errors->first('HistorialMedico')) 
                                         <i> {{ $errors->first('HistorialMedico') }} </i> 
                                         @endif	<br>
                                             </select>
                                              </div>
                                             </div>

                                              <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Foto del Alumno</div><input type= 'file' name = 'Foto'>
                                        @if($errors->first('Foto')) 
                                         <i> {{ $errors->first('Foto') }} </i> 
                                         @endif	<br>
                                             </select>
                                              </div>
                                             </diV>
<input type = 'submit' value = 'Guardar'>
<br>
</form>

@stop

@section('bienvenida')
Bienvenido panchito;
@stop






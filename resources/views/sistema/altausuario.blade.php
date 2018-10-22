
@extends('sistema.principal')


@section('contenido')
<h1> Alta de Usuarios </h1>
<br>
<form action = '{{route('guardausuario')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('IdUsuario')) 
<i> {{ $errors->first('IdUsuario') }} </i> 
@endif	<br>
Clave Usuario <input type = 'text' name = 'IdUsuario' value="{{$idms}}" readonly ='readonly'>
<br>

@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>
Nombre de Usuario<input type  ='text' name = 'Nombre' value="{{old('Nombre')}}">
<br>

@if($errors->first('ApellidoPaterno')) 
<i> {{ $errors->first('ApellidoPaterno') }} </i> 
@endif	<br>
Apellido Paterno<input type  ='text' name = 'ApellidoPaterno' value="{{old('ApellidoPaterno')}}">
<br>

@if($errors->first('ApellidoMaterno')) 
<i> {{ $errors->first('ApellidoMaterno') }} </i> 
@endif	<br>
Apellido Materno<input type  ='text' name = 'ApellidoMaterno' value="{{old('ApellidoMaterno')}}">
<br>

@if($errors->first('Telefono')) 
<i> {{ $errors->first('Telefono') }} </i> 
@endif	<br>
Telefono <input type  ='text' name = 'Telefono' value="{{old('Telefono')}}">
<br>

@if($errors->first('Correo')) 
<i> {{ $errors->first('Correo') }} </i> 
@endif	<br>
Correo<input type  ='text' name = 'Correo' value="{{old('Correo')}}">
<br>
@if($errors->first('Contrasena')) 
<i> {{ $errors->first('Contrasena') }} </i> 
@endif	<br>
Contrasena<input type  ='text' name = 'Contrasena' value="{{old('Contrasena')}}">
<br>
@if($errors->first('Tipo')) 
<i> {{ $errors->first('Tipo') }} </i> 
@endif	<br>
Tipo <input type  ='text' name = 'Tipo' value="{{old('Tipo')}}">
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>

@stop
@section('bienvenida')
Bienvenido;
@stop






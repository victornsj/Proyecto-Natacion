
@extends('productos.app')


@section('contenido')
<h1> Producto </h1>
<br>
<form action = '{{route('guardaproducto')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('IdProducto')) 
<i> {{ $errors->first('IdProducto') }} </i> 
@endif	<br>
        

Clave producto <input type = 'text' name = 'IdProducto' value="{{$IdProducto}}" readonly ='readonly'>
<br>
@if($errors->first('NombreProducto')) 
<i> {{ $errors->first('NombreProducto') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'NombreProducto' value="{{old('NombreProducto')}}">
<br>
@if($errors->first('Precio')) 
<i> {{ $errors->first('Precio') }} </i> 
@endif	<br>
Precio<input type = 'text' name = 'Precio' value="{{old('Precio')}}" >
<br>

<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>

@stop


@section('bienvenida')
Bienvenido panchito;
@stop








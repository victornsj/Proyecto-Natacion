<html>
<body>
<h1> Modifica Producto </h1>
<br>
<form action = '' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('IdProducto')) 
<i> {{ $errors->first('IdProducto') }} </i> 
@endif	<br>
        

Clave producto <input type = 'text' name = 'IdProducto' value="{{$Producto->IdProducto}}" readonly ='readonly'>
<br>
@if($errors->first('NombreProducto')) 
<i> {{ $errors->first('NombreProducto') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'NombreProducto' value="{{$Producto->NombreProducto}}">
<br>
@if($errors->first('Precio')) 
<i> {{ $errors->first('Precio') }} </i> 
@endif	<br>
Precio<input type = 'text' name = 'Precio' value="{{$Producto->Precio}}" >
<br>

<br>
<input type = 'submit' value = 'Guardar'>
<br>

</form>
</body>
</html>

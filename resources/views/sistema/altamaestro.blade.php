<html>
<body>
<h1> ALTA MAESTRO </h1>
<br>
<form action = '{{route('guardamaestro')}}' method ='POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('idm'))
<i> {{ $errors->first('idm') }}</i>
@endif 
<br>
Clave Profesor <input type = 'text' name = 'idm' value="{{$idms}}" readonly ="readonly">
<br>
@if($errors->first('nombre'))
<i> {{ $errors->first('nombre') }}</i>
@endif <br>
Nombre <input type = 'text' name = 'nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('edad'))
<i> {{ $errors->first('edad') }}</i>
@endif <br>
Edad <input type = 'text' name = 'edad' value="{{old('edad')}}">
<br>
<br>
Sexo <input type = 'radio' name = 'sexo' value ='M' checked >M
 <input type = 'radio' name = 'sexo' value ='F'>F
<br>
@if($errors->first('cp'))
<i> {{ $errors->first('cp') }}</i>
@endif <br>
Codigo Postal <input type = 'text' name ='cp' value="{{old('cp')}}">
<br>
@if($errors->first('beca'))
<i> {{ $errors->first('beca') }}</i>
@endif <br>
Beca <input type ='text' name = 'beca' value="{{old('beca')}}">
<br>
<br>
Seleccione Carrera <select name = 'idc'>
             @foreach($carreras as $cr)
             <option value = '{{$cr->idc}}'>{{$cr->nombre}}</option>
             @endforeach
</select>
<br>
<br>
@if($errors->first('archivo'))
<i> {{ $errors->first('archivo') }}</i>
@endif <br>
Sellecione Foto<input type= 'file' name = 'archivo'>
<br>
<br>
<input type = "submit" name="Guardar" value = "Guardar">
</form>
</body>
</html>
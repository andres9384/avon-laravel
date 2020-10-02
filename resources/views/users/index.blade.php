@extends('header')
@section('content')
<div class="container">
       
    

   <div class="row">
  <div class="col-sm-4">
    <a href="{{route('users.create')}}" class="btn btn-info mt-5">Crear un usuario</a>
  </div>
  <div class="col-sm-4">
  <a href="{{route('users.edit')}}" class="btn btn-warning  mt-5">Actualizar informacion</a>
  </div>
</div>

</body>
</html>
@endsection
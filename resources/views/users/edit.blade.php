<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Actualizar Perfil</h1>
    <div class="container ">
        <div class="row col-md-auto">
            <div class="col-6 offset-3">

          
    <form action="{{route('users.store')}}" method="post" class="container-sm" file="true" >
    @csrf

    <div class="form-group">
    <label for="names">Nombre </label>
        <input type="text" name="names" class="form-control" value="nombre usuario">
    </div>
    <div class="form-group">
    <label for="descricion">Lastname </label>
        <input type="text" name="lastnames"  class="form-control" value="apellido usuario">
    </div>
    <div class="form-group">
    <label for="precio">Gmail</label>
    <input type="text" name="email"  class="form-control" value="gmail usuario">
    </div>
    <div class="form-group">
    <label for="gmail">Fecha de nacimiento</label>
    <input type="date" name="age"  class="form-control">
    </div>
    <button class="btn btn-warning" type="submit">Actualizar </button>
    <a class="float-right btn-info btn" href="{{route('users.index')}}">Cancelar</a>
    
    </form>
    </div>
        </div>
    </div>
    
</body>
</html>
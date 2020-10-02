<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Actualizar Producto</h1>
    <div class="container ">
        <div class="row col-md-auto">
            <div class="col-6 offset-3">

          
    <form action="{{route('products.update', $products->id)}}" method="post" class="container-sm">
    @csrf
    @method('PUT')

    <div class="form-group">
    <label for="names">Nombre </label>
        <input type="text" name="name" value="{{$products->name}}" class="form-control">
    </div>
    <div class="form-group">
    <label for="descricion">Descripcion </label>
        <textarea name="description"  rows="5" class="form-control">{{$products->description}}</textarea>
        
    </div>
    <div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" name="price"  value="{{$products->price}}" class="form-control">
    </div>
    <div class="form-group">
    <label for="gmail">Imagen</label>
    <input type="text" name="product_image"  value="{{$products->product_image}}"  class="form-control">
    </div>
    <button class="btn btn-success" type="submit">Actualizar </button>
    <a class="float-right" href="{{route('products.index')}}">Cancelar</a>
    
    </form>
    </div>
        </div>
    </div>
    
</body>
</html>
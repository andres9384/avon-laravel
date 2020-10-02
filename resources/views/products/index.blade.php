@extends('header')
@section('content')
<div class="container">
       
       <div class="row">
           <div class="col-md-12">
               <div class="table-responsive">
                   <table class="table table-stripe table sm ">
                       <thead>
                           <tr class="bg-secondary text-white">
                               <th>NOMBRES</th>
                               <th>DESCRIPCION </th>
                               <th>PRECIO</th>
                               <th>IMAGEN</th>
                               <th>F.CREACION</th>
                               <th>OPCIONES</th>
                           </tr>
                       </thead>

                       <tbody>
                           @foreach($products as $product)
                           <tr>
                               <td>{{ $product->name}}</td>
                               <td>{{ $product->description}}</td>
                               <td>{{ $product->price}}</td>
                               <td>{{ $product->product_image}}</td>
                               <td>{{ $product->created_at}}</td>
                              
                               <td>
                               
                               <form action="{{ route('products.delete', $product->id)}}" method="POST">
                               @csrf    
                               @method('DELETE')
                               
                               
                           
                               <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Editar</a>
                               <button type="submit" class="btn btn-danger">Eliminar</button>
                               </form>
                               </td>
                               
                           </tr>
                           @endforeach
                           
                       </tbody>
                   </table>
                   <a href="{{ route('products.create') }}"><button class="btn btn-info float-right">Crear un producto</button></a>
               </div>
           </div>
       </div>
   </div>


</body>
</html>
@endsection
<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\product;

class ProductController extends Controller
{
    //Mostrar Tabla Productos 
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    //Formulario Crear Productos 
    public function create()
    {
        return view('products.create');
    }

    //Crear Producto
    public function store(Request $request)
    {
        $products= Product::create($request->all());
        return redirect()->route('products.index') ;


        
    }
    //Formulario Editar Productos 
    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit',compact('products'));
    }

    //Actualizar Producto 
    public function update(Request $request, $id)
    {
        $products = Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }

    //Eliminar Producto 
    public function destroy($id)
    {  
        $user= Product::find($id)->Delete();
        return redirect()->route('products.index') ;
    }
}

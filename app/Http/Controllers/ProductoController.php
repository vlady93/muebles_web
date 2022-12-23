<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Files;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-producto')->only('index');
         $this->middleware('permission:crear-producto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-producto', ['only' => ['edit','update']]);
    }
    public function index()
    {      
        
         $productos=Producto::get();
         

         return view('admin.producto.index',compact('productos'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }
    public function create()
    {
        $categorias=Categoria::get();
        return view('admin.producto.crear',compact('categorias'));
    }
    public function store(Request $request)
    {
       
        Producto::create($request->all());
        return redirect()->route('admin.producto.index');
    }

    public function show(Producto $producto)
    {
        $files = Files::where('producto_id', $producto->id)->get();
        $array=explode(',',$producto->descripcion);

        return view('admin.producto.show', compact('files','producto','array'));
    }
    public function picture(Producto $producto)
    {
        $files=Files::where('producto_id',$producto->id)->get();

        return view('admin.imagenes.crear', compact('producto','files'));
    }
    public function edit(Producto $producto)
    {
        $categorias=Categoria::get();
        return view('admin.producto.editar',compact('categorias','producto'));
    }

    public function update(Request $request ,Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }
}

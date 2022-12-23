<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class CategoriaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-categoria')->only('index');
         $this->middleware('permission:crear-categoria', ['only' => ['create','store']]);
         $this->middleware('permission:editar-categoria', ['only' => ['edit','update']]);
    }
    public function index()
    {      
        
         $categorias=Categoria::get();
         

         return view('admin.categoria.index',compact('categorias'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }
    public function create()
    {
        return view('admin.categoria.crear');
    }
    public function store(Request $request)
    {
       
        $usuario=Auth::user()->id;
        $categoria=$request->all()+[
            'user_id'=>Auth::user()->id,
        ];
        
            /* if($logo=$request->file('imagencategoria')){
                $logob = time().'_'.$logo->getClientOriginalName();
                $logo->move(public_path("/image"),$logob);
                $blog['imagencategoria']="$logob";   
            }
            $categoria['imagencategoria']="$logob";  */  
        
        if ($request->hasFile('imagencategoria')){
            $urlfoto    = $request->file('imagencategoria');
            $nombre     = time().'_'.$urlfoto->getClientOriginalName();
            $ruta=public_path('/image/'.$nombre);
            Image::make($urlfoto->getRealPath())
                ->resize(400,620)
                ->save($ruta,72);
                $categoria['imagencategoria']="$nombre";  
        }
        
    
        $categoria['user_id']="$usuario";
       
        Categoria::create($categoria);
        
        
        return redirect()->route('categorias.index');
    }
    
    public function edit(Categoria $categoria)
    {
        return view('admin.categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        
        $updatecategoria=$request->all();
        if ($nuevaimg=$request->file('imagencategoria')){
            $nombre = time().'_'.$nuevaimg->getClientOriginalName();
            $nueva=public_path('/image/'.$nombre);
            
            $img=Image::make($nuevaimg)
                ->resize(400,620)
                ->save($nueva,72);
                $updatecategoria['imagencategoria']="$nombre";  
        }else{
             unset($updatecategoria['imagencategoria']);
         }
         $categoria->update($updatecategoria);
        
        return redirect()->route('categorias.index');
    }

     

    public function show(Categoria $categoria)
    {
        $productos = Producto::where('categoria_id', $categoria->id)->get();

        return view('admin.categoria.show', compact('productos','categoria'));
    }


    public function destroy($id)
    {
        $imagen=Categoria::find($id);
        $imagen->delete();
        return redirect('welcome')->with('eliminar');
    }
 
}

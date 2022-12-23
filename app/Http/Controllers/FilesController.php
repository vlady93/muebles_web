<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class FilesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imagenes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_project=$request->producto_id;
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        $name = $request->file('file')->getClientOriginalName();
        $directory = storage_path() . '\app\public\images/';
        $new_name = Str::random(20);
        $ext = pathinfo($name, PATHINFO_EXTENSION);

        $pick = storage_path() . '\app\public\imagenes/'.$new_name.'.'.$ext;

        $image = Image::make($request->file('file'))
                        /* ->resize(500, null, function($constrains){
                            $constrains->aspectRatio();
                        }) */
                        ->save($pick,72);
       
        Files::create([
            'url'=> '/storage/imagenes/'.$new_name. '.' . $ext,
            'producto_id'=>$id_project,
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $imagen=Files::find($id);
       $url=str_replace('storage','public',$imagen->url);
       Storage::delete($url);
       $imagen->delete();
        return redirect('productos/file/'.$imagen->producto_id)->with('eliminar');
    
    }
}

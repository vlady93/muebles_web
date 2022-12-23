@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')

@endsection

@section('content')
    <section class="site-section bg-dark id="contact-section"><br><br>
        <div class="container ">
            
            <div class="row">
                <div class="col-md-12 mb-3 ">
                    <form action={{route('productos.store')}}  method="POST" class="p-5 bg-white">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12 text-center mt-2">
                                <h2 class="section-title mb-3">Registro de Mueble</h2>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="fname">Titulo</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoria_id"class="text-black">Categoría</label>
                            <select class="form-control" name="categoria_id" id="categoria_id" required>
                              <option value="" disabled selected>Seleccione una categoría</option>
                              @foreach ($categorias as $categoria)
                              <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                              @endforeach
                            </select>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="descripcion">Descripción</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control"
                                    placeholder="Descripción del mueble..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Registrar" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection

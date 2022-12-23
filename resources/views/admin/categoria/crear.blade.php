@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')
<link rel="stylesheet" href={{ asset('../css/dropify.css') }}>
@endsection

@section('content')
  
    <section class="site-section "  id="contact-section"><br><br>
        <div class="container bg-light">
            
            <div class="row">
                <div class="col-md-12 mb-3 ">
                    <form action={{route('categorias.store')}} method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12 text-center mt-2">
                                <h2 class="section-title mb-3">Registro de Categoria</h2>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="fname">Titulo</label>
                                <input type="text" id="nombre" name="titulo" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="fname">Imagen de categoría</label>
                                <input type="file" class="dropify" name="imagencategoria" >
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
<script src={{ asset('js/dropify.js')}}></script>

@endsection

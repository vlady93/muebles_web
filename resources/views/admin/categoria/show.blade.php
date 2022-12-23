@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')

@endsection

@section('content')

<section class="site-section" id="news-section" ><br><br>
    <div class="container bg-light ">
      <div class="row mb-5">
        <div class="col-12 text-center mt-3">
          <h2 class="section-title mb-3">{{$categoria->titulo}}</h2>
        </div>
      </div>

      <div class="row">
        @foreach ( $productos as $producto )
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href={{route('productos.show',$producto)}}><img src={{ asset('image/'.$producto->categoria->imagencategoria) }} alt="Free website template by Free-Template.co" class="img-fluid" width="300px" height="300px"></a>
              <h2 class="font-size-regular">{{$producto->nombre}}</h2>
              
            </div> 
          </div>
        @endforeach
        
        
        
      </div>
    </div>
  </section>
@endsection
@section('scripts')

@endsection
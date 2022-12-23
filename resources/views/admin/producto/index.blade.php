@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')

@endsection

@section('content')

<section class="site-section " id="news-section"><br><br>
    <div class="container  ">
      
      <div class="d-flex justify-content-between align-items-center mb-3 mr-2">
        <h4>Lista de Muebles</h4>                
            <a class="nav-link" href="{{ route('productos.create') }}">
                <span class="btn btn-success btn-sm ">Nuevo Producto</span>
            </a>
    </div>
      <div class="table-responsive">
        <table id="order-listing" class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Mueble</th>
                    <th colspan="2">Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>

                        
                        <td>{{ $producto->nombre }}</td>
                        <td> <img src={{ asset('image/'.$producto->categoria->imagencategoria) }}  width="100" height="100"></td>
                        
                        <td><a class="btn btn-primary" href={{route('producto.pictures',$producto)}}>Archivos</a></td>
                        
                        @can('editar-producto')
                        <td><a class="btn btn-warning" href={{route('productos.edit',$producto)}}>Editar</a></td>
                        @endcan
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
      {{-- <div class="row">
        @foreach ( $productos as $producto )
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href={{route('productos.show',$producto)}}><img src={{ asset('image/'.$producto->categoria->imagencategoria) }} alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular">{{$producto->nombre}}</h2>
              
            </div> 
          </div>
        @endforeach
        
        
        
      </div> --}}
    </div>
  </section>
@endsection
@section('scripts')

@endsection
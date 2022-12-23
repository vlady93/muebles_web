@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')

@endsection

@section('content')

    <section class="site-section " id="news-section"><br><br>
        <div class="container bg-light ">

            <div class="d-flex justify-content-between align-items-center mb-3 mr-2">
                <h4>Lista de categorias</h4>
                @can('crear-categoria')
                    <a class="nav-link" href="{{ route('categorias.create') }}">
                        <span class="btn btn-success btn-sm ">Nueva Categoría</span>
                    </a>
                @endcan

            </div>
            <div class="table-responsive">
                <table id="order-listing" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Mueble</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>


                                <td>{{ $categoria->titulo }}</td>
                                <td> <img src={{ asset('image/' . $categoria->imagencategoria) }} width="100"
                                        height="100"></td>
                                @can('editar-categoria')
                                <td><a href={{ route('categorias.edit', $categoria) }}> <span
                                  class="btn btn-warning">Editar</span> </a></td>
                                @endcan
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
@section('scripts')

@endsection

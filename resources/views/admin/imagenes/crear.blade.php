@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
@endsection

@section('content')
    <section class="site-section" id="news-section"><br><br>
        <div class="container  ">
            <div class="row mb-5">
                <div class="col-12 text-center mt-3">
                    <h2 class="section-title mb-3">Imagenes del mueble</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($files as $file)
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img style="width: 300px; height: 300px;" src={{ asset($file->url) }}
                                alt="Free website template by Free-Template.co" class="img-fluid"></a>
                            <form action={{ route('files.destroy', $file->id) }} method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="site-section bg-dark id="contact-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-12 text-center mt-2">
                            <h2 class="section-title mb-3">Registro de Imagenes</h2>
                        </div>
                    </div>
                    <form action={{ route('files.store') }} method="POST" enctype="multipart/form-data"
                        class="dropzone container" id="my-awesome-dropzone">


                        <input type="hidden" value="{{ $producto->id }}" name="producto_id">

                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- end of call me form -->
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"
        integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },

            dictDefaultMessage: "Arrastre la imagen al recuadro para subirlo",
            acceptedFiles: "image/*",
            maxFilesize: 5,
            maxFiles: 4,
        };
    </script>
@endsection

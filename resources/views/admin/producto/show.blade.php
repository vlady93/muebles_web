@extends('layouts.admin')
@section('title', 'Registrar muebles')
@section('styles')

@endsection

@section('content')
      <section class="site-section" id="about-section"><br><br>
        <div class="container">
          
          <div class="row large-gutters">
            <div class="col-lg-6 mb-5">
  
                <div class="owl-carousel slide-one-item with-dots">
                    @foreach ( $files as $file )
                    <div><img src={{ asset($file->url) }} style="width: 520px; height: 520px;" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                    @endforeach
        
                  </div>
  
            </div>
            <div class="col-lg-6 ml-auto">
              
              <h2 class="section-title mb-3">{{$producto->nombre}}</h2>
                  
                 
                  <ul class="list-unstyled ul-check success">
                    @foreach ($array as $arra )
                    <li><h5>{{$arra}}</h5></li>
                    @endforeach
                    
                    
                  </ul>
              
            </div>
          </div>
        </div>
      </section>
  

@endsection
@section('scripts')

@endsection

@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <section class="container-fluid perfil">
                <form method="POST" action="/actualizarPelicula/{{$peliculas->id}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  @method('PUT')
               <div class="row">
                    <div class="col-md-12">
                     <div class="card shadow" style="border:0px;">
                        <div class="card-header bg-white border-0" >
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h3 class="mb-0 ">Detalle de Pelicula</h3>
                              </div>
                           </div>
                        </div>
                        <div class="card-body" >
                           <h6 class="heading-small text-muted mb-4">Datos personales</h6>
                           <div class="pl-lg-4">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <strong>Titulo: </strong><br>
                                    <input type="text" name="title"  id="title" value="{{ $peliculas->title }}">
                                 </div>
                                 <div class="col-lg-6">
                                    <strong>Rating: </strong><br>
                                    <input type="text" name="rating" id="rating" value="{{ $peliculas->rating }}">
                                 </div>
                              </div><br>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <strong>Premios: </strong><br>
                                    <input type="text" name="awards" id="awards" value="{{ $peliculas->awards }}">
                                 </div>
                                 <div class="col-lg-6">
                                    <strong>Fecha de Estreno: </strong><br>
                                    <input type="text" name="release_date" id="release_date" value="{{ $peliculas->release_date }}">
                                 </div>
                              </div><br>
                              <div class="row">
                                 <div class="col-md-6">
                                    <strong>Duración: </strong><br>
                                    <input type="text" name="length" id="length" value="{{ $peliculas->length }}">
                                 </div>
                                 <div class="col-md-6">
                                    <strong>Genero: </strong>
                                    <select class="custom-select" name="genre_id" required>
                                      <option value="">Elige el Genero</option>
                                      @foreach ($generos as $genero)
                                        <option value="{{ $genero->id }}"
                                          {{ (isset($peliculas) && ($peliculas->genre_id == $genero->id))?'seleted':'' }}
                                        >{{ $genero->name }}</option>
                                      @endforeach
                                    </select>
                                 </div>
                              </div><br>
                           </div>
                        </div>
                     </div>
                     <hr class="my-4">
                  </div>
               </div>
               <div>
                 <div class="form-group">
                   {{-- <input type="submit" name="" class="btn btn-lg btn-danger float-right" value="agregarPelicula"> --}}
                    <button type="submit" class="btn btn-lg btn-danger float-right">Actualizar</button>
                 </div>
                  <a href="/listadopeliculas" class="btn btn-lg btn-warning float-left">Volver</a>
               </div>
             </form>
            </section>
         </div>
      </div>
   </div>
</div>
@endsection

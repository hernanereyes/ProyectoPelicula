@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-6">

  <form method="post" action = "\agregarpeliculas">
    {{csrf_field()}}
    <div class="form-group">
    <div>
    <label for="exampleInputEmail1">Titulo</label>
    <input name ="title" type="text" class="form-control" id="title" aria-describedby="" placeholder="Ingresa Titulo">
    </div>

    <div>
    <label for="exampleInputEmail1">Rating</label>
    <input name ="rating" type="text" class="form-control" id="rating" aria-describedby="" placeholder="Ingresa Rating">
    </div>

    <div>
    <label for="exampleInputEmail1">Premios</label>
    <input name ="awards" type="text" class="form-control" id="awards" aria-describedby="" placeholder="Ingresa Premios">
    </div>

    <div>
    <label for="exampleInputEmail1">Fecha de Estreno</label>
    <input name ="release_date" type="date" class="form-control" id="release_date" aria-describedby="" placeholder="Ingresa Titulo">
    </div>

    <div>
      <br>
    <button type="submit" class="btn btn-primary">Agregar Titulo</button>
    </div>
  </div>
</div>
</div>

</form>



@endsection

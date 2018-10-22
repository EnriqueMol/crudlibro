@extends('books.layouts')

@section('content')

<h1 class="text-center">Agregar Libros</h1>
<hr>
<div class="container">
  <form action="{{ route('books.store') }}" method="POST">
  @csrf

  <div class="row">
    
    <div class="col-md-12">
      <div class="form-group">
        <strong>Título:</strong>
        <input type="text" name="title" class="form-control" placeholder="Título del libro">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <strong>Descripción:</strong>
        <textarea name="description" class="form-control" placeholder="Reseña"></textarea>
      </div>
      
    </div>
    <div class="col-md-12 text text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


  </div>


  </form>

</div>




@endsection
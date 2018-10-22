@extends('books.layouts')

@section('content')

<h1 class="text-center">LIBROS</h1>

<div class="container">

	<a href="{{ route('books.create') }}" class="btn btn-info mb-3">Agregar Libros</a>
	
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Reseña</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td><a href="{{ route ('books.show',$book->id) }}">{{$book->title}}</a></td>
      <td>{{$book->description}}</td>
      <td><a class="btn-sm btn-info botoninput" href="{{ route('books.edit', $book->id) }}"><i class="far fa-edit"></i></a>
			<form action="{{ route('books.destroy',$book->id) }}" method="POST">
				@csrf
				@method('DELETE')

				<button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('¿Quiere borrar el registro?')" ><i class="far fa-trash-alt"></i></button>
				
			</form>
      </td>

     
    </tr>

    @endforeach
    
  </tbody>
</table>
{{ $books->links() }}
</div>




@endsection
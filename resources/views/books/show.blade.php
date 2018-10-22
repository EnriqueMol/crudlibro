@extends('books.layouts')

@section('content')
<hr>
 <div class="container">
   <div class="card">
    <div class="card-header">
     <h2 class="text-center"> {{$book->title}} </h2>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{$book->description}}</p>
        <footer class="blockquote-footer">Fecha de subida: <cite title="Source Title">{{ $book->created_at }}</cite></footer>
      </blockquote>
    </div>
</div>
 </div>



@endsection
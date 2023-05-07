@extends('book.layout')
@section('content')
<div class="row mt-3">
	<div class="col-lg-10 offset-1">
		<div class="row">
		  <form action="route('book.search')" method="post">
			  <div class="col mb-2">
			    <input name="title" type="text" class="form-control" placeholder="Judul">
			    <input name="description" type="text" class="form-control" placeholder="Deskripsi">
			    <input name="category" type="text" class="form-control" placeholder="Kategori">
			    <input name="keyword" type="text" class="form-control" placeholder="Keyword">
			    <input name="price" type="text" class="form-control" placeholder="Harga">
			    <input name="publisher" type="text" class="form-control" placeholder="Penerbit">
			    <button type="submit" class="btn btn-secondary">Search</button>
			  </div>
		  </form>
		  <div class="btn btn-sm btn-info"><a href="{{route('book.add')}}">create</a></div>
		</div>
		<table class="table">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">No</th>
	          <th scope="col">Judul Buku</th>
	          <th scope="col">Deskripsi</th>
	          <th scope="col">Kategori</th>
	          <th scope="col">Keyword</th>
	          <th scope="col">Harga</th>
	          <th scope="col">Stok</th>
	          <th scope="col">Penerbit</th>
	          <th scope="col">Aksi</th>
	        </tr>
	      </thead>
	      <tbody>
	        @foreach( $books as $index => $book)
	        <tr>
	          <td></td>
	          <td>{{$index+1}}</td>
	          <td>{{$book['title']}}</td>
	          <td>{{$book['description']}}</td>
	          <td>{{$book['category']}}</td>
	          <td>{{$book['keyword']}}</td>
	          <td>{{$book['price']}}</td>
	          <td>{{$book['stock']}}</td>
	          <td>{{$book['publisher']}}</td>
	          <td>
	          	<a href="{{route('book.edit', ['id' => $book['book_id']])}}">edit</a>
	          	<a href="{{route('book.delete', ['id' => $book['book_id']])}}">delete</a>
	          	<a href="#">view</a>
	          </td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
	</div>
</div>
@endsection
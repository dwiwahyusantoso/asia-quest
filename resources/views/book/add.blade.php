@extends('book.layout')
@section('content')
<div class="row mt-3">
	<div class="col-lg-10 offset-1">
<form method="post" action="{{route('book.add.store')}}">
@csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="title-help">
    <div id="title-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" class="form-control" name="description" id="description" aria-describedby="description-help">
    <div id="description-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">stock</label>
    <input type="text" class="form-control" name="stock" id="stock" aria-describedby="stock-help">
    <div id="stock-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" class="form-control" name="price" id="price" aria-describedby="price-help">
    <div id="price-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="publisher" class="form-label">publisher</label>
    <input type="text" class="form-control" name="publisher" id="publisher" aria-describedby="publisher-help">
    <div id="publisher-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="keyword" class="form-label">keyword</label>
    <input type="text" class="form-control" name="keyword" id="keyword" aria-describedby="keyword-help">
    <div id="keyword-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">category</label>
    <input type="text" class="form-control" name="category" id="category" aria-describedby="category-help">
    <div id="category-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection
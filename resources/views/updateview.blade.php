@extends('inventory') 
@section('content')

<div class="col-md-4 m-auto border mt-3 p-2 border-info">
	<h2 class="text-center text-warning"> UPDATE INVENTORY </h2>
<form action="updatedata" method="get">
	<div class="mb-2">
		<label for="">PRODUCT NAME</label>
		<input type="text" name="name" value="{{$pname}}"class="form-control" id="">
	</div>
	<div class="mb-2">
		<label for="">PRODUCT PRICE</label>
		<input type="text" name="price" value="{{$pprice}}" class="form-control" id="">
	</div>
	<div class="mb-2">
		<label for="">PRODUCT STOCK</label>
		<input type="text" name="stock" value="{{$pstock}}" class="form-control" id="">
	</div>
	<br>
	<input type="hidden" name="id" value="{{$pid}}">
	<button type="submit" class="btn btn-outline-warning rounded-pill"> UPDATE </button>
	</form>
</div>

@endsection
@extends('inventory')
@section('content')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<center> 
<button type="button" class="btn btn-outline-dark fs-6 mt-5" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
ADD PRODUCT
</button>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="staticBackdropLabel">Inventory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Name" class="form-control" name="pname" id="">
          </div>
          <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="form-control" name="price" id="">
          </div>
          <div class="mb-2">
            <input type="text" placeholder="Stock" class="form-control" name="pstock" id="">
          </div>
          <div class="mb-2">
            <input type="file" class="form-control" name="image" id="">
          </div>
          <button type="submit" class="btn btn-outline-secondary fw-bold fs=4 text-dark "> Add Product </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-5">
  <thead class="bg-info text-white fw-bold">
    <th> ID </th>
    <th> PRODUCT NAME </th>
    <th> PRICE</th>
    <th> STOCK </th>
    <th> PRODUCT IMAGE </th>
    <th> UPDATE </th>
    <th> DELETE </th>
  </thead>  
  <tbody class="bg-light fs-7">
    @foreach($mydata as $items)
    <tr>
      <form action="updatedelete" method="get">
        
      <td class="pt-4"><input type="hidden" value="{{$items['Id']}}" name="id">{{$items['Id']}}</td>
      <td class="pt-4"><input type="hidden" value="{{$items['PName']}}" name="name">{{$items['PName']}}</td>
      <td class="pt-4"><input type="hidden" value="{{$items['PPrice']}}" name="price">{{$items['PPrice']}}</td>
      <td class="pt-4"><input type="hidden" value="{{$items['PStock']}}" name="stock">{{$items['PStock']}}</td>
      <td ><img src="images/{{$items['PImage']}}" width="100px" height="100px" alt=""></td>
    <td class="pt-5"><input type="submit" class="btn btn-outline-info rounded-pill" name="update" value="UPDATE"></td>
    <td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" value="DELETE"></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
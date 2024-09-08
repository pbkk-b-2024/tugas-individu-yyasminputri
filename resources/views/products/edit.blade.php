@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3"> 
                <label class="form-label">Product_Name</label>
                <input type="text" name="Product_Name" class="form-control" placeholder="Name Product" value="{{ $product->Product_Name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Product_Id</label>
                <input type="text" name="Product_Id" class="form-control" placeholder="ID Product" value="{{ $product->Product_Id }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="Category" class="form-control" placeholder="Category" value="{{ $product->Category }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Stock</label>
                <input type="text" class="form-control" name="Stock" placeholder="Stock" value="{{ $product->Stock }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="Price" class="form-control" placeholder="Price" value="{{ $product->Price }}">
            </div>
        </div>  
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection 
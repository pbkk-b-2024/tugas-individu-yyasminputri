@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product_Name</label>
            <input type="text" name="Product_Name" class="form-control" placeholder="Name Product" value="{{ $product->Product_Name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Product_Id</label>
            <input type="text" name="Product_Id" class="form-control" placeholder="ID Product" value="{{ $product->Product_Id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="Category" class="form-control" placeholder="Category" value="{{ $product->Category }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Stock</label>
            <input class="form-control" name="Stock" placeholder="Stock" readonly>{{ $product->Stock }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="Price" class="form-control" placeholder="Price" value="{{ $product->Price }}" readonly>
        </div>
    </div>    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
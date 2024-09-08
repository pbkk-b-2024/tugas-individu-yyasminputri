@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Form fields here -->
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Product_Name" class="form-control" placeholder="Name Product">
            </div>
            <div class="col">
                <input type="text" name="Product_Id" class="form-control" placeholder="ID Product">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Category" class="form-control" placeholder="Category">
            </div>
            <div class="col">
                <input class="form-control" name="Stock" placeholder="Stock Product"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Price" class="form-control" placeholder="Price Product">
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
@endsection

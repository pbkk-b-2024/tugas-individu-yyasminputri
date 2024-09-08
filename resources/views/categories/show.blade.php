@extends('layouts.app')
  
@section('title', 'Show Category')
  
@section('contents')
    <h1 class="mb-0">Detail Category</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Category_Name</label>
            <input type="text" name="Category_Name" class="form-control" placeholder="Name Category" value="{{ $category->Category_Name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Category_Id</label>
            <input type="text" name="Category_Id" class="form-control" placeholder="ID Category" value="{{ $category->Category_Id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="Description" class="form-control" placeholder="Descriptions" value="{{ $category->Description }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Brand</label>
            <input class="form-control" name="Brand" placeholder="Brands" readonly>{{ $category->Brand }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $category->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $category->updated_at }}" readonly>
        </div>
    </div>
@endsection
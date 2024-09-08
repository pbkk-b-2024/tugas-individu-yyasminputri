@extends('layouts.app')
  
@section('title', 'Edit Category')
  
@section('contents')
    <h1 class="mb-0">Edit Category</h1>
    <hr />
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3"> 
                <label class="form-label">Category_Name</label>
                <input type="text" name="Category_Name" class="form-control" placeholder="Name Category" value="{{ $category->Category_Name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Category_Id</label>
                <input type="text" name="Category_Id" class="form-control" placeholder="ID Category" value="{{ $category->Category_Id }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="Description" class="form-control" placeholder="Descriptions" value="{{ $category->Description }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Brand</label>
                <input type="text" class="form-control" name="Brand" placeholder="Brands" value="{{ $category->Brand }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection 
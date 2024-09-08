@extends('layouts.app')

@section('title', 'Create Category')

@section('contents')
    <h1 class="mb-0">Add Category</h1>
    <hr />
    <form action="{{route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Form fields here -->
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Category_Name" class="form-control" placeholder="Name Category">
            </div>
            <div class="col">
                <input type="text" name="Category_Id" class="form-control" placeholder="ID Category">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Description" class="form-control" placeholder="Descriptions">
            </div>
            <div class="col">
                <input class="form-control" name="Brand" placeholder="Brands"></input>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
@endsection

@extends('layouts.app')
    
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Category</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th> 
                <th>Category_Name</th>
                <th>Category_Id</th>
                <th>Description</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($category->count() > 0)
                @foreach($category as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->Category_Name }}</td>
                        <td class="align-middle">{{ $rs->Category_Id }}</td>
                        <td class="align-middle">{{ $rs->Description }}</td>
                        <td class="align-middle">{{ $rs->Brand }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('categories.show', $rs->id)}}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('categories.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('categories.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Category not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
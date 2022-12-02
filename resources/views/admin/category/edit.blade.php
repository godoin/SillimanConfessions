@extends('layouts.master')

@section('title', 'Edit Category')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">

                <h4>Update Category
                    <a href="{{ url('admin/category') }}" class="btn btn-quarternary float-end">Go Back</a>
                </h4>

            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div> {{ $error }} </div>
                        @endforeach
                    </div>
                @endif


                <form action=" {{ url('admin/update-category/' . $category->id) }} " method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label> Category Name </label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Description </label>
                        <textarea name="description" rows="5" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label> Image </label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label> Navbar Status </label>
                            <input type="checkbox" name="navbar_status"
                                {{ $category->navbar_status == '1' ? 'checked' : '' }} />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label> Status </label>
                            <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }} />
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-quinary float-end mb-3"> Update Category </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection

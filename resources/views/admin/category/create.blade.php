@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">

                <h4>Add Category
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


                <form action=" {{ url('admin/add-category') }} " method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label> Category Name </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Description </label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label> Image </label>
                        <input type="file" name="image" class="form-control">
                    </div>


                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label> Navbar Status </label>
                            <input type="checkbox" name="navbar_status">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label> Status </label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-quinary float-end mb-3"> Add Category </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection

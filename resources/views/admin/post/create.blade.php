@extends('layouts.master')

@section('title', 'Add Post')

@section('content')


    <div class="container-fluid px-4">

        <div class="card mt-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div> {{ $error }} </div>
                    @endforeach
                </div>
            @endif

            <div class="card-header">
                <h4>Add Posts
                    <a href="{{ url('admin/posts') }}" class="btn btn-quarternary float-end">Go Back</a>
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ url('admin/add-post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-quinary float-end mb-3">Save Post</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection

@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')


    <div class="container-fluid px-4">

        <div class="card mt-4">

            <div class="card-header">
                <h4>Update Post
                    <a href="{{ url('admin/posts') }}" class="btn btn-quarternary float-end">Go Back</a>
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

                <form action="{{ url('admin/update-post/' . $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Category</label>
                        <select name="category_id" required class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}"
                                    {{ $post->category_id == $cateitem->id ? 'selected' : '' }}>
                                    {{ $cateitem->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" value="{{ $post->name }}" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5" class="form-control">{!! $post->description !!}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : '' }} />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-quinary float-end mb-3">Update Post</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection

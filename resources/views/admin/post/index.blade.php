@extends('layouts.master')

@section('title', 'View Post')

@section('content')


    <div class="container-fluid px-4">

        <div class="card mt-4 mb-3">

            <div class="card-header">
                <h4 class="mt-2">View Posts
                    <a href="{{ url('admin/add-post') }}" class="btn btn-quinary float-end">Add Posts</a>
                </h4>

            </div>

            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success"> {{ session('message') }} </div>
                @endif

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Post Name</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                <td>
                                    <a href=" {{ url('admin/edit-post/' . $item->id) }}" class="btn btn-success"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href=" {{ url('admin/delete-post/' . $item->id) }}" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection

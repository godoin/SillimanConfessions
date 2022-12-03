@extends('layouts.app')

@section('title', 'New Post')

@section('content')
    <!-- Post Pop-Up Section  -->
    <section class="pstp-container" id="post">
        <div class="content-pop" id="popup">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div> {{ $error }} </div>
                    @endforeach
                </div>
            @endif
            <div class="header">
                <h2>Post Your Confession</h2>
                <a href="{{ url()->previous() }}" class="text-decoration-none"><i class="fas fa-times"></i></a>
            </div>
            @if (session('message'))
                <h6 class="alert alert-success mb-3">{{ session('message') }}</h6>
            @endif
            <form action="{{ url('new-post') }}" method="POST">
                @csrf
                <div class="content-row">
                    <div class="content-title category-details">
                        <h3>Category Name</h3>
                        <select name="category_id" class="category">
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="content-row">
                    <div class="content-title">
                        <h3>Confession Title</h3>
                    </div>
                    <input type="text" name="name" class="title">
                </div>

                <div class="content-row">
                    <div class="content-title">
                        <h3>Confession Message</h3>
                    </div>
                    <textarea required="required" name="description" row="3" class="message"></textarea>
                </div>
                <div class="content-btn">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </section>
@endsection

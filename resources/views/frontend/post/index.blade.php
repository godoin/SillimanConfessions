@extends('layouts.app')

@section('title', "$category->name")

@section('content')
    <!-- Sub-header Section  -->
    <section class="sub-header">
        <div class="left-content">
            @php
                $categories = App\Models\Category::where('navbar_status', '0')
                    ->where('status', '0')
                    ->get();
            @endphp
            @foreach ($categories as $cateitem)
                <div class="content-col">
                    <button>
                        <img src="{{ asset("$cateitem->image") }}" alt="">
                        <a href="{{ url('category/' . $cateitem->name) }}"> {{ $cateitem->name }}</a>
                    </button>
                </div>
            @endforeach
        </div>
        <div class="right-content">
            <div class="breadcrumbs">
                <i class="fa-solid fa-house"></i>
                <a href="{{ url('home') }}">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="{{ url('categories') }}">Categories</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="{{ url('category/' . $cateitem->name) }}">{{ $cateitem->name }}</a>
            </div>
        </div>
    </section>

    <!-- Home Introduction Banner Section -->
    <section class="home-intro-banner">
        <h2> Lorem ipsum dolor. </h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat. </p>
        <a href="{{ url('new-post') }}" class="btn btn-primary text-decoration-none">Post</a>
    </section>

    <!-- Standard Search Bar Section  -->
    <section class="search-container">
        <form>
            <input type="search" placeholder="Search by Name" name="search" value="{{ $search }}" />
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </section>

    <!-- Content Post Section  -->
    <section class="post-container">
        <div class="row">
            @foreach ($post as $postitem)
                <div class="wrapper-post">
                    <a href="{{ url('category/' . $category->name . '/' . $postitem->name) }}">
                        <div class="content-col">
                            <h3>{{ $category->created_at->format('m-d-Y') }}</h3>
                            <div class="content">
                                <p>
                                    {{ $postitem->description }}
                                </p>
                            </div>
                            <div class="actions">
                                <i class="fa-solid fa-comment"></i>
                            </div>
                            <div class="user-details">
                                <h3 class="user-name">{{ $postitem->user->name }}</h3>
                                <h3 class="category-name">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="paginate">
                {{ $post->links() }}
            </div>
    </section>

@endsection

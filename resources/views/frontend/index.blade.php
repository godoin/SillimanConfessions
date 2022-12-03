@extends('layouts.app')

@section('title', 'Home')

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
            </div>
        </div>
    </section>

    <section class="home-page-container">
        <!-- Home Post Section  -->
        <section class="home-post-container">
            <div class="row">
                @foreach ($post as $post_item)
                    <div class="wrapper-home">
                        <a href="#">
                            <div class="content-col">
                                <h3>{{ $post_item->created_at->format('m-d-Y') }}</h3>
                                <div class="content">
                                    <p>
                                        {{ $post_item->description }}
                                    </p>
                                </div>
                                <div class="actions">
                                    <i class="fa-solid fa-comment"></i>
                                </div>
                                <div class="user-details">
                                    <h3 class="user-name">{{ $post_item->user->name }}</h3>
                                    <h3 class="category-name">{{ $post_item->category->name }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="paginate">
                    {{ $post->links() }}
                </div>
        </section>

        {{-- @foreach ($latest_posts as $post_item)
                <div class="row-col">
                    <div class="content mb-3">
                        <a href="{{ url('category/' . $post_item->category->name . '/' . $post_item->name) }}"
                            class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{ $post_item->name }}</h5>
                        </a>
                    </div>
                </div>
@endforeach --}}

        <!-- Content Collection Section  -->
        <section class="post-links" style="width: 20%;">
            <div class="post-wrapper">
                <div class="row-col">
                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                </div>
                <div class="button-col">
                    <a href="{{ url('new-post') }}" class="post-redirect">Click here</a>
                </div>

            </div>
            <div class="collection">
                <div class="header-row">
                    Latest Posts
                </div>
                @foreach ($latest_posts as $post_item)
                    <div class="row-col">
                        <a href="{{ url('category/' . $post_item->category->name . '/' . $post_item->name) }}"
                            class="text-decoration-none">
                            <h5 class="mb-0">{{ $post_item->description }}</h5>
                            <h5 class="mt-3" style="font-weight: 300;"> {{ $post_item->created_at->format('m-d-Y') }}
                            </h5>
                        </a>
                    </div>
                @endforeach

            </div>
        </section>

    </section>



@endsection

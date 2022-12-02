@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- <!-- Content Collection Section  -->
    <section class="collection">
        <h1>Latest Posts</h1>
        <div class="row">
            @foreach ($latest_posts as $post_item)
                <div class="col-md-4">
                    <div class="content mb-3">
                        <a href="{{ url('category/' . $post_item->category->name . '/' . $post_item->name) }}"
                            class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{ $post_item->name }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}

@endsection

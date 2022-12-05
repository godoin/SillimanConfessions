@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <!-- Categories Section  -->
    <section class="categories">
        <header> Select a Category</header>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor <br> euismod elit id sodales. Quisque
            dictum blandit
            arcu, quis lobortis. </p>
        <div class="container">
            <div class="row">
                @foreach ($categories as $cateitem)
                    <div class="row-col">
                        <img src="{{ asset("$cateitem->image") }}" alt="">
                        <h5>{{ $cateitem->name }}</h5>
                        <a href="{{ url('category/' . $cateitem->name) }}">
                            <button class="btn btn-primary">
                                Select
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

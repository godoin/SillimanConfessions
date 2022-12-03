@extends('layouts.app')

@section('title', 'View Post')

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

    <section class="view-container">
        <div class="left-view">
            <!-- Content Post Section  -->
            <section class="pc-container">
                <div class="row-details">
                    <h2>{{ $post->created_at->format('m-d-Y') }}</h2>
                    <h2>{{ $post->category->name }}</h2>
                </div>
                <div class="content">
                    <header>{{ $post->name }}</header>
                    <p>{{ $post->description }}</p>
                </div>
                <div class="user-details">
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h2>{!! $post->user->name !!}</h2>
                </div>
            </section>

            <!-- Comments Section  -->
            <section class="ms-container">
                <div class="header-details">
                </div>
                @if (session('message'))
                    <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                @endif
                <div class="row">
                    <div class="content-col">
                        <form action="{{ url('comments') }}" method="POST">
                            @csrf
                            <h6 style="font-size: 22px; color: #564D4A;">Leave a Comment</h6>
                            <input type="hidden" name="post_name" value="{{ $post->name }}">
                            <textarea name="comment_body" rows="3" class="form-control"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
                <div class="row-comments">
                    @forelse ($post->comments as $comment)
                        <div class="comment-container content-col custom-size">
                            <h6 class="user-name mb-1">
                                @if ($comment->user)
                                    {{ $comment->user->name }}
                                @endif
                                <small class="ms-3">
                                    {{ $comment->created_at->format('d-m-Y') }}
                                </small>
                            </h6>
                            <p class="user-comment mb-3">
                                {!! $comment->comment_body !!}
                            </p>
                            {{-- @if (Auth::check() && Auth::id() == $comment->user_id)
                        <button type="button" value="{{ $comment->id }}" class="btn btn-quinary deleteComment">
                            Delete
                        </button>
                    @endif --}}
                        </div>

                    @empty
                        <div class="no-comment">
                            No Comments found
                        </div>
                    @endforelse
                </div>
            </section>
        </div>

        <!-- Content Collection Section  -->
        <section class="post-links" style="margin: 52px 70px 0 0;">
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

@section('scripts')

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.deleteComment', function() {

                if (confirm('Are you sure you want to delete this comment?')) {
                    var thisClicked = $(this);
                    var comment_id = thisClicked.val();

                    $.ajax({
                        type: "POST",
                        url: "/delete-comment",
                        data: {
                            'comment_id': comment_id
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                thisClicked.closest('.comment-container').remove();
                                alert(res.message);
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }
            });
        });
    </script>

@endsection

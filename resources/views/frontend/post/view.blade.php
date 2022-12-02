@extends('layouts.app')

@section('title', 'View Post')

@section('content')

    <!-- Content Post Section  -->
    <section class="pc-container">

        <div class="row">
            <div class="content-col" style="margin-right: -60px;">
                <div class="icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <h3>{!! $post->user->name !!}</h3>
            </div>
            <div class="content-col" style="margin-right: -30px;">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3>{!! $post->created_at->format('m-d-Y') !!}</h3>
            </div>
            <div class="content-col">
                <div class="icon">
                    <i class="fas fa-columns"></i>
                </div>
                <h3>{{ $post->category->name }}</h3>
            </div>
        </div>

        <div class="horizontal-line"></div>

        <div class="header-details">
            <i class="fa-solid fa-quote-left"></i>
            <h1>{!! $post->name !!}.</h1>

        </div>
        <p>
            {!! $post->description !!}
        </p>

        {{-- <div class="fav-icon">
            <button>
                <div class="icon"><i class="fa-solid fa-heart"></i></div>
                <span>Add to Favorite</span>
            </button>
        </div> --}}

    </section>

    <!-- Comments Section  -->
    <section class="ms-container">
        <div class="header-details">
            <h1>Comments</h1>
        </div>
        @if (session('message'))
            <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
        @endif
        <div class="row">
            <div class="content-col">
                <form action="{{ url('comments') }}" method="POST">
                    @csrf
                    <h6>Leave a Comment</h6>
                    <input type="hidden" name="post_name" value="{{ $post->name }}">
                    <textarea name="comment_body" rows="3" class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>

        <div class="row">
            @forelse ($post->comments as $comment)
                <div class="comment-container content-col custom-size">
                    <h6 class="user-name mb-1">
                        @if ($comment->user)
                            {{ $comment->user->name }}
                        @endif
                        <small class="ms-3 text-primary">
                            date commented: {{ $comment->created_at->format('d-m-Y') }}
                        </small>
                    </h6>
                    <p class="user-comment mb-3">
                        {!! $comment->comment_body !!}
                    </p>
                    @if (Auth::check() && Auth::id() == $comment->user_id)
                        <button type="button" value="{{ $comment->id }}" class="btn btn-quinary deleteComment">
                            Delete
                        </button>
                    @endif
                </div>

            @empty
                <h6>No Comments Found</h6>
            @endforelse
        </div>


        {{-- <div class="action">
            <button class="btn btn-border-md">Show More</button>
        </div> --}}

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

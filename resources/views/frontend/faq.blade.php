@extends('layouts.app')

@section('title', 'FAQ')

@section('content')


    <!-- FAQs Section -->
    <section class="faq-container">
        <header>Frequently Asked Questions (FAQs)</header>

        <div class="faq">
            <div class="question">
                <h3>Question 1</h3>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Question 2</h3>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Question 3</h3>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Question 4</h3>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>
    </section>

    <!-- FAQs Questions Section -->
    <section class="ask-questions">
        <h2>Still have questions?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ullam possimus accusantium? <br> Labore
            ducimus numquam vitae sequi dicta illum voluptas!</p>
        <a href="{{ url('contact') }}"><button class="btn btn-primary">Contact Us</button></a>
    </section>
@endsection

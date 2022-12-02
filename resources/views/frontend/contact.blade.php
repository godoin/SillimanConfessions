@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- Contact Section  -->
    <div class="contact-container">
        <h2>Get in Touch</h2>
        <div class="row">
            <div class="contact-col border-right">
                <form action="#" method="post">
                    <h3>Send us a message</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. Etiam tempus turpis a est porta
                        convallis
                        <br> at at nisl.
                    </p>
                    <div class="contact-details">
                        <div class="input">
                            <span>Name*</span>
                            <input type="text" name="" required="required">
                        </div>
                        <div class="input">
                            <span>Email*</span>
                            <input type="email" name="" required="required">
                        </div>
                    </div>
                    <div class="input message">
                        <span>Message*</span>
                        <br>
                        <textarea required="required"></textarea>
                    </div>
                    <div class="input submit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            {{-- <div class="vertical-line"></div> --}}
            <div class="contact-col">
                <h3>Email Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
                <div class="contact-pair">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h5>test@test.com</h5>
                </div>
                <h3>Call Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
                <div class="contact-pair">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h5>09123456789</h5>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}" crossorigin="anonymous"></script>
@endsection

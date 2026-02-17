@extends('layouts.app')

@section('content')

<main class="about-container">

    <div class="about-grid">
        <div class="about-text-column">

            <p>
                If you have questions about my process,
                a particular painting, the purchase process
                or would just like to strike up a conversation,
                please email me.
            </p>

            <p>
                gerard@media-rare.com
            </p>

            <p>
                I can’t wait to hear from you.
                <br>Gerard
            </p>
        </div>

        <!-- RIGHT: IMAGE -->
        <div class="about-image-column">
            <img src="{{ asset('images/FirstSale.jpg') }}" alt="Artist portrait">
        </div>

    </div>

</main>

@endsection

@extends('layouts.app')

@section('content')

<main class="about-container">

    <div class="about-grid">

        <!-- LEFT: TEXT -->
        <div class="about-text-column">
            <h1 class="about-title">Artist Statement</h1>

            <p>
                Living in West Michigan, I am privy to a wide range 
                of scenes... rolling hills, dense forests and, of course, 
                Lake Michigan. I create mostly realistic oil paintings 
                in an impasto style. By applying paint heavily to the 
                canvas, I am able to capture textures and the interplay 
                of light on otherwise recognizable forms.
            </p>

            <p>
                My true inspiration has always been trees. Being a 
                curator myself, I feel trees are nature’s artifacts. 
                They show the past, quite literally at times, and can 
                provide great variety even within the same species.
            </p>

            <p>
                My aim is to produce beautiful work that evokes a 
                certain calmness, a reprieve from the human existence. 
                My hope is to create sanctuary and evoke memories 
                of nature in your favorite spaces.
            </p>
        </div>

        <!-- RIGHT: IMAGE -->
        <div class="about-image-column">
            <img src="{{ asset('images/artist-black.jpg') }}" alt="Artist portrait" class="base">
            <img src="{{ asset('images/artist.jpg') }}" alt="Artist portrait" class="hover">
        </div>

    </div>

</main>

@endsection

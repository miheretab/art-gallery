@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

<main class="home gallery">

  <a href="#<!--  route('painting', 'magic-tree') }} -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/MagicTree.webp') }}" class="" alt="Magic Tree">
    </div>
    <div class="art-caption">
      <span class="art-title">Magic Tree</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-snow') }} -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstSnow.webp') }}" class="" alt="First Snow">
    </div>
    <div class="art-caption">
      <span class="art-title">First Snow</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-hand-trees') }} -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstHandTrees.webp') }}" class="" alt="Field of Red">
    </div>
    <div class="art-caption">
      <span class="art-title">Field of Red</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

</main>

<section class="mailing">
  <div class="mailing-section">
    <p class="mailing-title">
      Please, Join My Mailing List:
    </p>

    <p class="mailing-sub">
      For Exclusive Offers, Updates & Releases
    </p>
  </div>

  <form class="mailing-form" method="POST" action="{{ route('subscribe') }}">
      @csrf
    <input type="text" placeholder="Name" name="name" />
    <input type="email" placeholder="Email" name="email" />
    <button type="submit" class="submit-box"></button>
  </form>

</section>
@endsection
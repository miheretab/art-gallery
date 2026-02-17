@extends('layouts.app')

@section('content')
<main class="gallery">

  <a href="#<!--  route('painting', 'frozen-pond')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FrozenPond.webp') }}" class="base" alt="Frozen Pond">
      <img src="{{ asset('images/KWall-FrozenPond.webp') }}" class="hover" alt="Frozen Pond">
    </div>
    <div class="art-caption">
      <span class="art-title">Frozen Pond</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-hand-trees')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstHandTrees.webp') }}" class="base" alt="Field of Red">
      <img src="{{ asset('images/KWall-FirstHandTrees.webp') }}" class="hover" alt="Field of Red">
    </div>
    <div class="art-caption">
      <span class="art-title">Field of Red</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-snow')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstSnow.webp') }}" class="base" alt="First Snow">
      <img src="{{ asset('images/KWall-FirstSnow.webp') }}" class="hover" alt="First Snow">
    </div>
    <div class="art-caption">
      <span class="art-title">First Snow</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'magic-tree')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/MagicTree.webp') }}" class="base" alt="Magic Tree">
      <img src="{{ asset('images/KWall-MagicTree.webp') }}" class="hover" alt="Magic Tree">
    </div>
    <div class="art-caption">
      <span class="art-title">Magic Tree</span>
      <span class="art-meta"></span>
      <span class="art-status"></span>
    </div>
  </a>
</main>
@endsection
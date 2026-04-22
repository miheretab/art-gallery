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
      <span class="art-meta">20h x 24w</span>
      <span class="art-status">$3,600</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-hand-trees')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstHandTrees.webp') }}" class="base" alt="Field of Red">
      <img src="{{ asset('images/KWall-FirstHandTrees.webp') }}" class="hover" alt="Field of Red">
    </div>
    <div class="art-caption">
      <span class="art-title">Field of Red</span>
      <span class="art-meta">20h x 24w</span>
      <span class="art-status">$2,400</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'beaver-dam')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/BeaverDam.webp') }}" class="base" alt="Beaver Dam">
      <img src="{{ asset('images/KWall-BeaverDam.webp') }}" class="hover" alt="Beaver Dam">
    </div>
    <div class="art-caption">
      <span class="art-title">Beaver Dam</span>
      <span class="art-meta">40h x 30w</span>
      <span class="art-status">$4,300</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'magic-tree')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/MagicTree.webp') }}" class="base" alt="Magic Tree">
      <img src="{{ asset('images/KWall-MagicTree.webp') }}" class="hover" alt="Magic Tree">
    </div>
    <div class="art-caption">
      <span class="art-title">Magic Tree</span>
      <span class="art-meta">30h x 40w</span>
      <span class="art-status">$5,750</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'shore-pine')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/ShorePine.webp') }}" class="base" alt="Shore Pine">
      <img src="{{ asset('images/KWall-ShorePine.jpg') }}" class="hover" alt="Shore Pine">
    </div>
    <div class="art-caption">
      <span class="art-title">Lakeshore Tree</span>
      <span class="art-meta">40h x 30w</span>
      <span class="art-status">$5,250</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'up-reservoir')  -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/UPReservoir.webp') }}" class="base" alt="UP Reservoir">
      <img src="{{ asset('images/KWall-UPReservoir.webp') }}" class="hover" alt="UP Reservoir">
    </div>
    <div class="art-caption">
      <span class="art-title">UP Reservoir</span>
      <span class="art-meta">40h x 30w</span>
      <span class="art-status">$4,750</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'first-snow') }} -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/FirstSnow.webp') }}" class="base" alt="First Snow">
      <img src="{{ asset('images/KWall-FirstSnow.webp') }}" class="hover" alt="First Snow">
    </div>
    <div class="art-caption">
      <span class="art-title">First Snow</span>
      <span class="art-meta">24h x 20w</span>
      <span class="art-status">$3,200</span>
    </div>
  </a>

  <a href="#<!--  route('painting', 'three-little-trees') }} -->" class="art">
    <div class="art-frame">
      <img src="{{ asset('images/ThreeLittleTrees.webp') }}" class="base" alt="Three Little Trees">
      <img src="{{ asset('images/KWall-ThreeLittleTrees.webp') }}" class="hover" alt="Three Little Trees">
    </div>
    <div class="art-caption">
      <span class="art-title">Three Little Trees</span>
      <span class="art-meta">30h x 40w</span>
      <span class="art-status">$7,500</span>
    </div>
  </a>
</main>
@endsection
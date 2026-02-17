<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Media Rare' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="site-header">

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div class="mobile-title">Gerard Adams</div>
        <!--<div class="cart-icon">&#128722;</div>-->

        <!-- Mobile Fullscreen Menu -->
        <div class="mobile-menu-overlay" id="mobileMenu">
            <div class="menu-close" onclick="toggleMenu()">×</div>

            <nav class="mobile-menu-nav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('paintings') }}">Available Work</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </div>

    </div>

    <!-- Desktop Header -->
    <div class="desktop-header">

        <div class="header-left">
            <div class="logo">
                <span class="g">g</span>
                <span class="name">gerard</span>
                <span class="surname">ADAMS</span>
            </div>

            <nav class="main-nav">
                <a href="{{ route('home') }}">home</a>
                <a href="{{ route('paintings') }}">available work</a>
                <a href="{{ route('about') }}">about</a>
                <a href="{{ route('contact') }}">contact</a>
            </nav>
        </div>

        <div class="production">
            <div>Another</div>
            <img src="{{ asset('images/logo.png') }}" alt="logo icon">
            <div>Production</div>
        </div>

    </div>

</header>


@yield('content')


<footer>
  <p>© 2025 Gerard Adams</p>
</footer>

<script>
function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('active');
}
</script>

</body>
</html>
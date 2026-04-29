<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sophia Amor Erfe') }} — Portfolio</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
</head>
<body>



    {{-- Navigation --}}
    <nav class="navbar" id="navbar">
        <div class="container nav-inner">
            <a href="#hero" class="nav-logo">SAYE</a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a href="{{ route('resume.download') }}" class="btn-outline" target="_blank" rel="noopener">
                        Resume
                    </a>
                </li>
            </ul>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    {{-- Mobile Menu --}}
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="#about"    class="mobile-link">About</a></li>
            <li><a href="#skills"   class="mobile-link">Skills</a></li>
            <li><a href="#projects" class="mobile-link">Projects</a></li>
            <li><a href="#contact"  class="mobile-link">Contact</a></li>
            <li>
                <a href="{{ route('resume.download') }}" class="mobile-link" target="_blank" rel="noopener">
                    Download Resume
                </a>
            </li>
        </ul>
    </div>
   
    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Sophia Amor Erfe. Built with Laravel.</p>
            <div class="footer-socials">
                <a href="https://github.com/sophiaamorerfe71-del" target="_blank" rel="noopener">GitHub</a>
                <a href="https://www.linkedin.com/in/sophiaamor-erfe-17881a406/" target="_blank" rel="noopener">LinkedIn</a>
                <a href="mailto:sophiaamorerfe71@gmail.com">Email</a>
            </div>
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
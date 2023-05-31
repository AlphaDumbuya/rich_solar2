<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/rich.css') }}">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.  min.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/i18next@20.4.3/dist/umd/i18next.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/i18next-browser-languagedetector@6.1.1/dist/umd/i18nextBrowserLanguageDetector.min.js"></script>
    <meta charset="UTF-8">
    <title>Rich Solar PV</title>
</head>
<body>
  <main>
      <!-- Navigation Header -->
      <header>
        <nav class="navbar">
            <a href="/" class="nav-branding"><img src="{{ asset('/imgs/logo.jpg')}}" alt="logo"></a>
            <li>
                
              </li>
            <ul class="nav-menu">
                <!-- translate -->
                
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
            </ul>
            <!-- Mobile Nav Menu  -->
            <ul class="_nav_menu">
                <span class="close_menu">&times;</span>
                <li class="_nav_"><a href="/">Home</a></li>

                <li class="_nav_"><a href="/contact">Contact</a></li>

                <li class="_nav_"><a href="/categories">Categories</a></li>
            </ul>
            <!-- mobile nav end -->
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <!-- End of Navigation Header -->
    @yield('content')

   <!-- Footer -->
   <footer>
    <div class="foot">
        
        <div class="socials">
            <h3 class="follow-us">Follow Us</h3>
            <a href="https://www.facebook.com/profile.php?id=100085279497411"> <i class="fab fa-facebook"></i></a>

            <a href="https://youtube.com/@RICHSOLARTALK"> <i class="fab fa-youtube"></i><a>

            <a href="https://mobile.twitter.com/GoRichSolar"> <i class="fab fa-twitter"></i></a>

            <a href="https://www.instagram.com/gorichsolar/"> <i class="fab fa-instagram"></i></a>

            <a href="https://www.linkedin.com/company/richsolar/"> <i class="fab fa-linkedin"></i></a>
            
        </div>
    </div>
    <p><i>Designed by: <a href="https://alpha-dumbuya.vercel.app/"> Alpha Dumbuya</a></i></p>
  </footer>
  <!-- End of Footer -->
    <script src="{{ URL::asset('/js/app.js') }}"></script>
    <script src="{{ URL::asset('/css/index.js') }}"></script>
  </main>
</body>
</html>
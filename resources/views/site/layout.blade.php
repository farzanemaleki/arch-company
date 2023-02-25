<!DOCTYPE HTML>
<html lang="fa">
  <head>
    @include("site.includes.headerLinks")
    @yield("links")
  </head>
<body>
<div class="animsition">
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->
    @include("site.includes.sidebar")

    <!-- Navbar -->
    @include("site.includes.header")
    
    @yield("main")

    <!-- Footer -->
    @include("site.includes.footer")
    
  </div>
</div>

<!-- jQuery -->
@include("site.includes.footerScript")
@yield("scripts")
</body>
</html>
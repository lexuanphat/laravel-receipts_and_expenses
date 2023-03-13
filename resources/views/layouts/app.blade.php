<!DOCTYPE html>
<html lang="en">

@include("layouts.head")

<body class="g-sidenav-show  bg-gray-200">
    @include("layouts.sidebar")
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include("layouts.nav")
    <!-- End Navbar -->
    
    @yield('content')

  </main>
  @include("layouts.fixed_plugins")

  <!--   Core JS Files   -->
  @include("layouts.script")
</body>

</html>

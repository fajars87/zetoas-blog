<!DOCTYPE HTML>
<html lang="en-US">
<head>
@include('zetoas.includes.head')
</head>
<body>
<!-- Fullscreen backgrounds -->
<div id="thumbs">
@include('zetoas.includes.bg')
</div>
<div id="superbgimage">
	<div class="scanlines"></div>
</div>
<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrapper">
@include('zetoas.includes.header')
  
  <!-- Begin Container -->
  <div id="container" class="opacity"> 
    
    <!-- Begin Blog -->
    <div class="blog"> 
      
      <!-- Begin Posts -->
        @yield('content')
      <!-- End Posts --> 
      
      <!-- Begin Sidebar -->
      <div class="sidebar">
      @include('zetoas.includes.sidebar')
      </div>
      <!-- End Sidebar --> 
    </div>
    <!-- End Blog -->
    
    <div class="clear"></div>
    <div id="footer">
    @include('zetoas.includes.footer')
</body>
</html>
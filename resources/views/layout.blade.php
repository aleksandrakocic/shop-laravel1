<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        {{-- every view is responsible for its own title
            just add section for title yield('title', 'Laravel')
            can put defult value @
            --}}

        <title> @yield('title') </title>
    <body>

      
      @yield('content')  

      <div>
        <nav>
          <a href="/">Home</a>
          <a href="/products">Products</a>
          <a href="/services">Services</a>
          <a href="/about">About us</a>
          <a href="/contact">Contact</a>
        </nav>
      </div>

      <div id='footer'>

        <p> Copyrights Kole. <?php echo date("Y"); ?>.  </p>

      </div>

    </body>
</html>

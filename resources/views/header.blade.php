<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="{{ url('images/favicon.svg') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{ env("APP_NAME") }} - Meets on the Move</title>

      @yield('css_script')
      <link rel="stylesheet" href="{{ URL('css/header.css') }}">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   </head>

   <body>
      <header class="main-header">
         <section class="logo-section">
            <img src="{{ url('images/logo.svg') }}" alt="Raily logo">
         </section>

         <section class="menu-section">
            <a href="#">Meetups</a>
            <a href="#">AI</a>
            <a href="#">Gamification</a>
            <a href="#">Rewards</a>
            <a href="#">Web 3</a>
            <a href="#">Concierge</a>
            <a href="#">Charity</a>
            <a href="#">All Features</a>
         </section>

         <section class="contact-section">
            <a href="#">Contact us</a>
         </section>
      </header>

      @yield('body')

      @yield('js_script')
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
       </script>
   </body>
</html>
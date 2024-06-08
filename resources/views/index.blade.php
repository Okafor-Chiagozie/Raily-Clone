@extends("header")

@section('css_script')
   <link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('body')
   <div class="div-one">
      <section class="banner-image">
         <img src="{{ url('images/banner-1.webp') }}" alt="Meet on the Move">
      </section>

      <p>AI-Driven + Gamify</p>

      <section class="image-group">
         <section class="image-container">
            <img src="{{ url('images/phone-1.webp') }}" alt="AI-Driven + Gamify">
         </section>

         <section class="image-container">
            <img src="{{ url('images/phone-2.webp') }}" alt="AI-Driven + Gamify">
         </section>

         <section class="image-container">
            <img src="{{ url('images/phone-3.webp') }}" alt="AI-Driven + Gamify">
         </section>
      </section>
   </div>

   <div class="div-two">
      <section class="image-wrapper">
         <img src="{{ url('images/globe-background.webp') }}" alt="Globe image" class="globe-hide">
         <img src="{{ url('images/globe-1.webp') }}" alt="Globe image" class="globe-float">
         <img src="{{ url('images/globe-2.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-3.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-4.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-5.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-6.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-7.webp') }}" alt="Globe image" class="globe-float globe-hide">
      </section>

      <h1 class="globe-text">
         TRAVEL. CONNECT. <br>
         EXPLORE.
      </h1>

      <section class="company-section">
         <section>
            Trusted by industry leaders
         </section>
         <section class="image-container">
            <img src="{{ url('images/company-1.svg') }}" alt="Microsoft for satrtups logo">
         </section>
         <section class="image-container">
            <img src="{{ url('images/company-2.svg') }}" alt="Nividia logo">
         </section>
         <section class="image-container">
            <img src="{{ url('images/company-3.svg') }}" alt="AWS startup program logo">
         </section>
         <section class="image-container">
            <img src="{{ url('images/company-4.svg') }}" alt="Google for startups logo">
         </section>
         <section class="image-container duo">
            <img src="{{ url('images/company-5.webp') }}" alt="Leap logo">
            <span>RocketFuel Semi-Finalist 2024</span>
         </section>
         <section class="image-container">
            <img src="{{ url('images/company-6.webp') }}" alt="Beta startup logo">
         </section>
      </section>

      <section class="rating-section">
         <section class="rating-container">
            <h2 class="">Loved by</h2>

            <section class="star-container">
               <section class="image-section">
                  <img src="{{ url('images/rating.svg') }}" alt="Rating image">
               </section>

               <span>5.0</span>
            </section>

            <p>Spill Your Thoughts</p>
         </section>

         <section class="user-images-section">
            <h4>Hello</h4>
         </section>
      </section>
   </div>

   <div class="div-three">
      <h1>Welcome</h1>
   </div>
@endsection
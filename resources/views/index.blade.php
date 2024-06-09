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
            <h3>Loved by</h3>

            <section class="star-container">
               <section class="image-section">
                  <img src="{{ url('images/rating.svg') }}" alt="Rating image">
               </section>

               <span>5.0</span>
            </section>

            <p>Spill Your Thoughts</p>
         </section>

         <section class="user-image-section">
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
         </section>
      </section>
   </div>

   <div class="div-three">
      <h2 class="section-heading">
         <span>Meet Raily where you can</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body">
         <section class="image-slide-section">
            <section class="image-slide-container">
               <section class="text-section">
                  <h4>Connect</h4>
                  <p>Meet interesting people anywhere with our AI matchmaker.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-1.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>

            <section class="image-slide-container">
               <section class="text-section">
                  <h4>Discover</h4>
                  <p>See who's at your destination or nearby that shares your interests.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-2.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>

            <section class="image-slide-container">
               <section class="text-section">
                  <h4>Bond</h4>
                  <p>Moving or relaxing, our AI magically finds your connections.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-3.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>
            
            <section class="image-slide-container">
               <section class="text-section">
                  <h4>Explore</h4>
                  <p>Journey together to new places and experiences with Raily AI concierge.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-4.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>

            <section class="color-effect">
               <img src="{{ url('images/color-effect.webp') }}" alt="Color effect">
            </section>
         </section>

         <section class="indicator-slide-section">
            <section class="first-section">
               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>
            </section>

            <section class="second-section">
               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>

               <span>
                  <span></span>
               </span>

               <section class="slide-line"></section>

               <section class="slide-image-section">
                  <section class="slide-image-container">
                     <img src="{{ url('images/slide.svg') }}" alt="Slide image">
                  </section>
               </section>
            </section>
         </section>

         <section class="text-slide-section">
            <section class="text-slide-container">
               <h4>Connect</h4>
               <p>Meet interesting people anywhere with our AI matchmaker.</p>
            </section>

            <section class="text-slide-container">
               <h4>Discover</h4>
               <p>See who's at your destination or nearby that shares your interests.</p>
            </section>

            <section class="text-slide-container">
               <h4>Bond</h4>
               <p>Moving or relaxing, our AI magically finds your connections.</p>
            </section>

            <section class="text-slide-container">
               <h4>Explore</h4>
               <p>Journey together to new places and experiences with Raily AI concierge.</p>
            </section>
         </section>

         <section class="email-section">
            <form action="#" method="post" class="email-form">
               <input type="email" name="email" placeholder="Enter your email" required>
               <input type="submit" value="Ask for Early Access" name="submit">
            </form>
         </section>
      </section>
   </div>

   <div class="div-four">
      <h2 class="section-heading">
         <span>Raily ecosystem</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body">
         <section class="ripple-container">
            <img src="{{ url('images/ripple.svg') }}" alt="Ripple effect">

            <section class="orbit-section">
               <section class="first--section">
                  <section class="image-section">
                     <img src="{{ url('images/yi.svg') }}" alt="AI image">
                  </section>
               </section>

               <section class="second-section">
                  <span>Matchmaking</span>
                  <section class="image-section">
                     <img src="{{ url('images/raily.webp') }}" alt="Raily logo">
                  </section>
                  <span>Concierge</span>
               </section>

               <section></section>
            </section>
         </section>

         <section>

         </section>
      </section>
   </div>
@endsection
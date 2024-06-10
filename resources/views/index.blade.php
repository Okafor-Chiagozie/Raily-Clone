@extends("header")

@section('css_script')
<link rel="stylesheet" href="{{ url('css/index.css') }}">
<link rel="stylesheet" href="{{ url('css/index-responsive.css') }}">
@endsection

@section('body')
   <div class="div-one">
      <section class="banner-image" data-aos="fade-up">
         <img src="{{ url('images/banner-1.webp') }}" alt="Meet on the Move">
      </section>

      <p data-aos="fade-up">AI-Driven + Gamify</p>

      <section class="image-group">
         <section class="image-container" data-aos="fade-up">
            <img src="{{ url('images/phone-1.webp') }}" alt="AI-Driven + Gamify">
         </section>

         <section class="image-container" data-aos="fade-up">
            <img src="{{ url('images/phone-2.webp') }}" alt="AI-Driven + Gamify">
         </section>

         <section class="image-container" data-aos="fade-up">
            <img src="{{ url('images/phone-3.webp') }}" alt="AI-Driven + Gamify">
         </section>
      </section>

      <section class="email-section" data-aos="fade-up">
         <form action="#" method="post" class="email-form">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" value="Ask for Early Access" name="submit">
         </form>
      </section>
   </div>

   <div class="div-two">
      <section class="image-wrapper" data-aos="fade-up">
         <img src="{{ url('images/globe-background.webp') }}" alt="Globe image" class="globe-hide">
         <img src="{{ url('images/globe-1.webp') }}" alt="Globe image" class="globe-float">
         <img src="{{ url('images/globe-2.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-3.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-4.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-5.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-6.webp') }}" alt="Globe image" class="globe-float globe-hide">
         <img src="{{ url('images/globe-7.webp') }}" alt="Globe image" class="globe-float globe-hide">
      </section>

      <h1 class="globe-text" data-aos="fade-up">
         TRAVEL. CONNECT. <br>
         EXPLORE.
      </h1>

      <section class="company-section" data-aos="fade-up">
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

      <section class="rating-section" data-aos="fade-up">
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
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
               <img src="{{ url('images/user-image-1.webp') }}" alt="User-image">
            </section>
            <section class="user-image-container remove-1">
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
      <h2 class="section-heading" data-aos="fade-up">
         <span>Meet Raily where you can</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body">
         <section class="image-slide-section">
            <section class="image-slide-container" data-aos="fade-up">
               <section class="text-section">
                  <h4>Connect</h4>
                  <p>Meet interesting people anywhere with our AI matchmaker.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-1.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>

            <section class="image-slide-container" data-aos="fade-up">
               <section class="text-section">
                  <h4>Discover</h4>
                  <p>See who's at your destination or nearby that shares your interests.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-2.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>

            <section class="image-slide-container" data-aos="fade-up">
               <section class="text-section">
                  <h4>Bond</h4>
                  <p>Moving or relaxing, our AI magically finds your connections.</p>
               </section>

               <section class="image-section">
                  <img src="{{ url('images/phone-slide-3.webp') }}" alt="Meet Raily where you can">
               </section>
            </section>
            
            <section class="image-slide-container" data-aos="fade-up">
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

         <section class="email-section" data-aos="fade-up">
            <form action="#" method="post" class="email-form">
               <input type="email" name="email" placeholder="Enter your email" required>
               <input type="submit" value="Ask for Early Access" name="submit">
            </form>
         </section>
      </section>
   </div>

   <div class="div-four">
      <h2 class="section-heading" data-aos="fade-up">
         <span>Raily ecosystem</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body">
         <section class="ripple-container" data-aos="fade-up">
            <img src="{{ url('images/ripple.svg') }}" alt="Ripple effect">

            <section class="orbit-section">
               <section class="first-section">
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

               <section class="third-section">
                  <span>AI Raily</span>
               </section>
            </section>
         </section>

         <section class="eco-container-1" data-aos="fade-up">
            <section class="image-section">
               <img src="{{ url('images/ecosystem-1.webp') }}" alt="Raily ecosystem">
            </section>

            <section class="tag-section">
               <span>AR</span>

               <section class="icon-section">
                  <img src="{{ url('images/ar.svg') }}" alt="AR image">
               </section>
            </section>
         </section>
         
         <section class="eco-container-2" data-aos="fade-up">
            <section class="tag-section">
               <span>XR</span>

               <section class="icon-section">
                  <img src="{{ url('images/xr.svg') }}" alt="XR image">
               </section>
            </section>

            <section class="image-section">
               <img src="{{ url('images/ecosystem-2.webp') }}" alt="Raily ecosystem">
            </section>
         </section>
         
         <section class="eco-container-3" data-aos="fade-up">
            <section class="image-section">
               <img src="{{ url('images/ecosystem-3.webp') }}" alt="Raily ecosystem">
            </section>

            <section class="tag-section">
               <span>Smartwatches</span>

               <section class="icon-section">
                  <img src="{{ url('images/smartwatch.svg') }}" alt="Smartwatch image">
               </section>
            </section>
         </section>
         
         <section class="eco-container-4" data-aos="fade-up">
            <section class="tag-section">
               <span>Mobile App</span>

               <section class="icon-section">
                  <img src="{{ url('images/mobile-app.svg') }}" alt="Mobile-app image">
               </section>
            </section>

            <section class="image-section">
               <img src="{{ url('images/ecosystem-4.webp') }}" alt="Raily ecosystem">
            </section>
         </section>
      </section>
   </div>

   <div class="div-five">
      <h2 class="section-heading" data-aos="fade-up">
         <span>All Features</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body" data-aos="fade-up" data-aos="fade-up">
         <section class="first-grid">
            <section class="first-section">
               <section>
                  <img src="{{ url('images/features/feature-1.webp') }}" alt="Raily feature">
               </section>
               <section>
                  <img src="{{ url('images/features/feature-2.webp') }}" alt="Raily feature">
               </section>
               <section>
                  <img src="{{ url('images/features/feature-3.webp') }}" alt="Raily feature">
               </section>
            </section>

            <section class="second-section">
               <section class="box-one">
                  <section>
                     <img src="{{ url('images/features/feature-4.webp') }}" alt="Raily feature">                        
                  </section>

                  <section>
                     <img src="{{ url('images/features/feature-5.webp') }}" alt="Raily feature">                     
                  </section>
               </section>

               <section class="box-two">
                  <section>
                     <img src="{{ url('images/features/feature-6.webp') }}" alt="Raily feature">
                  </section>

                  <section>
                     <section>
                        <img src="{{ url('images/features/feature-7.webp') }}" alt="Raily feature">
                     </section>
                     <section>
                        <img src="{{ url('images/features/feature-8.webp') }}" alt="Raily feature">
                     </section>
                     <section>
                        <img src="{{ url('images/features/feature-9.webp') }}" alt="Raily feature">
                     </section>
                  </section>
                  
                  <section>
                     <section>
                        <img src="{{ url('images/features/feature-10.webp') }}" alt="Raily feature">
                     </section>
                     <section>
                        <img src="{{ url('images/features/feature-11.webp') }}" alt="Raily feature">
                     </section>
                     <section>
                        <img src="{{ url('images/features/feature-12.webp') }}" alt="Raily feature">
                     </section>
                  </section>
               </section>
            </section>
         </section>

         <section class="second-grid">
            <section class="box-one feature-image-container">
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-13.webp') }}" alt="Raily feature">
               </section>
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-14.webp') }}" alt="Raily feature">
               </section>
            </section>
            
            <section class="box-two feature-image-box">
               <img class="feature-image" src="{{ url('images/features/feature-15.webp') }}" alt="Raily feature">
            </section>
            
            <section class="box-three feature-image-container">
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-16.webp') }}" alt="Raily feature">
               </section>
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-17.webp') }}" alt="Raily feature">
               </section>
            </section>
            
            <section class="box-four feature-image-box">
               <img class="feature-image" src="{{ url('images/features/feature-18.webp') }}" alt="Raily feature">
            </section>
            
            <section class="box-five feature-image-container">
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-19.webp') }}" alt="Raily feature">
               </section>
               <section class="feature-image-box">
                  <img class="feature-image" src="{{ url('images/features/feature-20.webp') }}" alt="Raily feature">
               </section>
            </section>
         </section>
      </section>
   </div>

   <div class="video-section video-standalone" data-aos="fade-up">
      <video loop muted autoplay autobuffer>
			<source src="https://azure.raily.app/videos/AR_demo.mp4" type="video/mp4">
		</video>
   </div>

   <div class="div-six">
      <h2 class="section-heading" style="justify-content: flex-start" data-aos="fade-up">
         <span>XR</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body" data-aos="fade-up">
         <div class="video-section">
            <video loop muted autoplay autobuffer>
               <source src="https://azure.raily.app/videos/XR_Japan_1440_web.mp4" type="video/mp4">
            </video>
         </div>
      </section>
   </div>
   
   <div class="div-six">
      <h2 class="section-heading" data-aos="fade-up">
         <span>Smartwatch as Social Circle</span>

         <section class="audio-section">
            <img src="{{ url('images/audio.svg') }}" alt="Audio image">
         </section>
      </h2>

      <section class="section-body" data-aos="fade-up">
         <div class="video-section">
            <video loop muted autoplay autobuffer>
               <source src="https://azure.raily.app/videos/Smartwatches_1440_web.mp4" type="video/mp4">
            </video>
         </div>
      </section>

      <section class="email-section" data-aos="fade-up">
         <form action="#" method="post" class="email-form">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" value="Ask for Early Access" name="submit">
         </form>
      </section>
   </div>
@endsection
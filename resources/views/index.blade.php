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
      
   </div>
@endsection
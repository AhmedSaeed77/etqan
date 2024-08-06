@extends('website/core/home')

@section('title', 'الاعلانات')
 @section('content')
    <!-- start hero section -->
    <div class="hero ">
      <div class="container d-flex justify-content-center ">
        <div class="hero_container d-flex align-items-center justify-content-center ">
          <h1 class="hero_container_header my-0">لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إ</h1>
          <p class="hero_container_description my-0">لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم
            لوريم
            إيبسوم لوريم إيبسوم لوريم إيبسوم
            لوريم إيبسوم </p>
          <a href="{{ route('contact') }}">
            <button class="main_btn hero_container_button">اتصل بنا</button>
          </a>
        </div>
      </div>
    </div>
    <!-- end hero section -->
    <!-- start details section -->
    <section class="container py-5 ">
      <div class="row d-flex  align-items-center ads_details">
        <div class=" col-12 col-md-6  order-2 order-md-1 ads_details_content ">

          <h2> إيبسوم لوريم إيبسوم لوريم إيبسوم</h2>
          <p class="mt-3 mt-md-4">
            لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم
            لوريم إيبسوم لوريم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم
            إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم
            إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم
          </p>
          <div class="d-flex gap-5">
            <div class="d-flex align-items-center gap-2">
              <i class="fas fa-clock icon"></i>
              <span>10:00 Am</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="fas fa-th-large icon"></i>
              <span>الاخبار</span>
            </div>

          </div>
        </div>
        <figure class="position-relative d-flex order-1 order-md-2  justify-content-end  col-12 col-md-6">
          <img src="{{ asset('images/about.jpeg') }}" class="img-fluid " alt="ads">

        </figure>

      </div>
    </section>
    <!-- end details section -->
@endsection


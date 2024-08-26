@extends('website/core/home')

@section('title', 'الرئيسية')


 @section('content')
<style>

.div-up{
    display: flex;
    justify-content: center;
}
figure {
    background: transparent; /* Ensure no background color */
    border: none; /* Remove any borders */
    outline: none; /* Remove any outlines */
}

</style>


    <!-- start About section -->
    <section class="container py-5 ">
      <div class="row d-flex about align-items-center">
        <div class=" col-12 col-md-6 about_content order-2 order-md-1">
          <sub>عن إتقان</sub>
          <h2>{{ $home['about_content']['title'] }}</h2>
          <p class="mt-3 mt-md-4">
            {!! $home['about_content']['description'] !!}
          </p>
        </div>
        <figure class="position-relative d-flex order-1 order-md-2  justify-content-end  col-12 col-md-6">
          <img src="{{ url($home['about_content']['image']) }}" class="about_image " alt="about">

        </figure>

      </div>
    </section>
    <!-- end About section -->
    <!-- start ads section -->
    <div class="container py-5 ads">
      <div class="title  pt-5 d-flex align-items-center gap-3">
        <span class="title_border"></span>
        <h2 class="text-primary fw-bold fs-1">{{ $data['ads'] }}</h2>
      </div>
      <div class="div-up py-5">
        @foreach ($advertisements as $advertisement)
        <a href="{{ route('ads_details',$advertisement->id) }}" class = "main_shadow d-flex gap-3 px-0 py-0 ads_container">
            <img src="{{ url($advertisement->image) }}" class="ads_image img-fluid" alt="">
            <div class="ps-2 ps-sm-3 py-2  ads_content ">
              <h3> {{ $advertisement->name }}</h3>
              <p>{!! $advertisement->description !!}</p>
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center gap-2">
                  <i class="fas fa-clock icon"></i>
                  <span>{{ \Carbon\Carbon::parse($advertisement->date_time)->format('Y-m-d H:i') }}</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <i class="fas fa-th-large icon"></i>
                  <span></span>
                </div>

              </div>

            </div>
          </a>
        @endforeach

      </div>
    </div>
    <!-- end ads section -->
    <!-- start doctors -->
    <div class="container">
      <div class="d-grid ">
        <div class="title  pt-5 d-flex align-items-center gap-3">
          <span class="title_border"></span>
          <h2 class="text-primary fw-bold fs-1">المؤسسين</h2>
        </div>
        <div class="doctors d-flex flex-wrap gap-5 py-5 justify-content-center">
            @foreach ($doctors as $doctor)
                <div class="doctor_card text-center w-[100px] d-grid gap-3">
                    <img src="{{ url($doctor->image) }}" alt="">
                    <div class="content p-3">
                        <h2 class="fw-bold fs-4">{{ $doctor->name }}</h2>
                        <hr class="doctor_title_border">
                        <p>{!! $doctor->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('doctors') }}" class="mx-auto">

          <button class="btn main_btn w-auto ">عرض المزيد </button>
        </a>
      </div>
    </div>
    <!-- end  doctors -->
    <!-- start programmes -->
    <!-- programs -->
    <div class="container ">
      <div class="d-grid ">
        <div class="title  pt-5 d-flex align-items-center gap-3">
          <span class="title_border"></span>
          <h2 class="text-primary fw-bold fs-1">البرامج</h2>
        </div>
        <div class="doctors  gap-5 py-5 text-end justify-content-start gap-5">
          @foreach ($programs as $program)
            <a href="{{ route('program_details',$program->id) }}" class="doctor_card  w-[100px] d-grid gap-3">
              <img src="{{ url($program->image) }}" alt="">
              <div class="content text-end p-3 d-grid gap-2">
                <h2 class="fw-bold fs-4"> {{ $program->name }} </h2>
                <p>{!! $program->description !!}</p>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
    <!-- end programmes -->

    <!-- start hero section -->
    <div class="hero" style="background: url('{{ url($home['home_content']['image']) }}') no-repeat center center; background-size: cover; height: 100vh;">
        <div class="container d-flex justify-content-center ">
          <div class="hero_container d-flex align-items-center justify-content-center ">
            <h1 class="hero_container_header my-0"> {{ $home['home_content']['title'] }}</h1>
            <p class="hero_container_description my-0">{!! $home['home_content']['description'] !!}</p>
            <a href="{{ route('contact') }}">
              <button class="main_btn hero_container_button">اتصل بنا</button>
            </a>
          </div>
        </div>
      </div>
      <!-- end hero section -->

  </div>
  @endsection

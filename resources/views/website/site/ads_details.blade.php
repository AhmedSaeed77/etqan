@extends('website/core/home')

@section('title', 'الاعلانات')
 @section('content')

    <!-- start details section -->
    <section class="container py-5 ">
      <div class="row d-flex  align-items-center ads_details">
        <div class=" col-12 col-md-6  order-2 order-md-1 ads_details_content ">

          <h2>  {{ $advertisement->name }}  </h2>
          <p class="mt-3 mt-md-4">
            {!! $advertisement->description !!}
          </p>
          <div class="d-flex gap-5">
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
        <figure class="position-relative d-flex order-1 order-md-2  justify-content-end  col-12 col-md-6">
          <img src="{{ url($advertisement->image) }}" class="img-fluid " alt="ads">

        </figure>

      </div>
    </section>
    <!-- end details section -->
@endsection


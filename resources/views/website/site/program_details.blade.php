@extends('website/core/home')

@section('title', 'البرامج')
 @section('content')

        <div class="container">
            <div class="program_details gap-5 py-5 d-grid gap-5">

                {{-- <div class="title pb-4  pt-5 d-flex align-items-center mx-auto gap-3">
                    <i class="fas fa-hand-point-left fs-2 mt-2 text-primary"></i>
                    <h2 class="text-primary text-center my-2"> خطوات الانضمام </h2>
                </div>
                <ul class="steps d-grid d-md-flex align-items-center justify-content-center gap-4">
                    <li><span>1</span>
                        ريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                        لوريم ابسيم لوريم ابسيم لوريم ابسيم لوري
                    </li>
                    <li><span>2</span>
                        ريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                        لوريم ابسيم لوريم ابسيم لوريم ابسيم لوري
                    </li>
                    <li><span>3</span>
                        ريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                        لوريم ابسيم لوريم ابسيم لوريم ابسيم لوري
                    </li>
                    <li><span>4</span>
                        ريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                        لوريم ابسيم لوريم ابسيم لوريم ابسيم لوري
                    </li>
                </ul> --}}

                <div class="d-grid d-md-flex justify-content-between align-items-start gap-5 my-2">

                    <div class="program_info py-3 h-100 order-1 order-md-0 d-grid gap-4 align-top align-content-start ">
                        <h2 class="text-primary">تفاصيل البرنامج </h2>
                        <div class="d-grid gap-1">
                            <h2 class="fw-bold t fs-5"> {{ $program->name }} </h2>

                            <div class="content d-grid justify-content-start ">
                                <p>
                                    {!! $program->description !!}
                                </p>
                            </div>
                        </div>
                        {{-- <button class="btn main_btn join_us_btn  w-fit ">انضم الان </button> --}}
                    </div>
                    <div class="program_image order-0 order-md-1">
                        <img src="{{ url($program->image) }}" class="img-fluid " alt="program img">
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
                    <iframe class="w-100" style="aspect-ratio: 16/9;" src="https://www.youtube.com/embed/{{ $program->url_video }}"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
   @endsection



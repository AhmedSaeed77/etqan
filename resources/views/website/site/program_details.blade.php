@extends('website/core/home')

@section('title', 'البرامج')
 @section('content')
<!-- start hero section -->
        <div class="hero ">
            <div class="container d-flex justify-content-center ">
                <div class="hero_container d-flex align-items-center justify-content-center ">
                    <h1 class="hero_container_header my-0">لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إ</h1>
                    <p class="hero_container_description my-0">لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم إيبسوم لوريم
                        إيبسوم
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
        <div class="container">
            <div class="program_details gap-5 py-5 d-grid gap-5">

                <div class="title pb-4  pt-5 d-flex align-items-center mx-auto gap-3">
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
                </ul>

                <div class="d-grid d-md-flex justify-content-between align-items-start gap-5 my-2">

                    <div class="program_info py-3 h-100 order-1 order-md-0 d-grid gap-4 align-top align-content-start ">
                        <h2 class="text-primary">تفاصيل البرنامج </h2>
                        <div class="d-grid gap-1">
                            <h2 class="fw-bold t fs-5">البرنامج الاول </h2>

                            <div class="content d-grid justify-content-start ">
                                <p>
                                    لوريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                                    لوريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم

                                    لوريم ابسيم لوريم ابسيم لوريم ابسيم لوريم م لوريم
                                </p>


                            </div>
                        </div>
                        <button class="btn main_btn join_us_btn  w-fit ">انضم الان </button>


                    </div>
                    <div class="program_image order-0 order-md-1">
                        <img src="{{ asset('images/programdetails.jpeg') }}" class="img-fluid " alt="program img">

                    </div>
                </div>
            </div>
        </div>
    </div>
   @endsection

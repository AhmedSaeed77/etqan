@extends('website/core/home')

@section('title', ' الخريجين')
 @section('content')

        <div class="container ">
            <!-- doctors -->
            <div class="d-grid justify-content-center">
                <div class="title  pt-5 d-flex align-items-center gap-3">
                    <span class="title_border"></span>
                    <h2 class="text-primary fw-bold fs-1">  الخريجين</h2>
                </div>
                <div class="doctors  gap-5 py-5  justify-content-center gap-5">
                    @foreach ($graduates as $graduate)
                    <div class="doctor_card text-center w-[100px] d-grid gap-3">
                        <img src="{{ asset('img/graduate.jpg') }}" alt="">
                        <div class="content p-3">
                            <h2 class="fw-bold fs-4">{{ $graduate->name }}</h2>
                            <hr class="doctor_title_border">
                            <p>{!! $graduate->description !!}</p>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>


        </div>
    </div>
  @endsection

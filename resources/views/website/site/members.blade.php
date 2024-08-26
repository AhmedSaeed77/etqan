@extends('website/core/home')

@section('title', 'أعضاء مجلس الادارة')
 @section('content')

        <div class="container ">
            <!-- doctors -->
            <div class="d-grid justify-content-center">
                <div class="title  pt-5 d-flex align-items-center gap-3">
                    <span class="title_border"></span>
                    <h2 class="text-primary fw-bold fs-1">أعضاء مجلس الادارة</h2>
                </div>
                <div class="doctors  gap-5 py-5  justify-content-center gap-5">
                    @foreach ($members as $member)
                    <div class="doctor_card text-center w-[100px] d-grid gap-3">
                        <img src="{{ url($member->image) }}" alt="">
                        <div class="content p-3">
                            <h2 class="fw-bold fs-4">{{ $member->name }}</h2>
                            <hr class="doctor_title_border">
                            <p>{!! $member->description !!}</p>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>


        </div>
    </div>
  @endsection

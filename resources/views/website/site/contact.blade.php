@extends('website/core/home')

@section('title', 'تواصل معنا')
 @section('content')

    <div class="container">
      <div class="contact_us gap-5 py-5 d-grid gap-5">
        <div>
          <h2 class="page_title">تواصل معنا</h2>
          <p>اترك رسالتك وسيتم التواصل معك في اقرب فرصه</p>
        </div>
        <div class="d-grid d-md-flex justify-content-center gap-5 justify-content-md-between align-items-start ">
          <div class="contact_form  order-1 order-md-0 ">
            <form method="post" action="{{ route('storecontact') }}" class="d-grid gap-3">
                @csrf
              <div class="d-grid gap-3">
                <div class="d-flex items-center gap-3 row">

                  <input type="text" name="name" placeholder="الاسم" required/>
                  @error('name')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                  <input type="email" name="email" placeholder="البريد الالكتروني" required/>
                  @error('email')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <textarea  name="message" placeholder="الرسالة" required></textarea>
                    @error('message')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </div>


              </div>
              <button type="submit" class="btn main_btn">ارسال</button>
            </form>
          </div>
          <div class="contact_info   order-0 order-md-1 d-grid gap-4 align-top" dir="ltr">
            <div class="d-flex align-items-center gap-2 ">
              <i class="fas fa-envelope"></i>
              <span class="fw">{{ $data['email'] }}</span>
            </div>
            <div class="d-flex align-items-center gap-2 ">
              <i class="fas fa-map-marker-alt"></i>
              <span class="fw"> {{ $data['location'] }} </span>
            </div>
            <div class="d-flex align-items-center gap-2 ">
              <i class="fas fa-phone-alt"></i>
              <span class="fw">{{ $data['phone'] }}</span>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

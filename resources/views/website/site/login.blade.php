@extends('website/core/home')

@section('title', 'تسجيل الدخول')
 @section('content')

    <div class="container">
      <div class="contact_us gap-5 py-5 d-grid gap-5">
        <div >
          <h2 class="page_title"> تسجيل الدخول</h2>
          <p> تسجيل الدخول على الموقع لكى تستفيد بكل جديد</p>
        </div>
        <div class="d-grid d-md-flex justify-content-center gap-5 align-items-start ">
          <div class="contact_form  order-1 order-md-0 ">
            <form method="post" action="{{ route('login') }}" class="d-grid gap-3" enctype="multipart/form-data">
                @csrf
              <div class="d-grid gap-3">
                <div class="d-flex items-center gap-3 row">

                    <label for="exampleInputName1">  البريد الالكترونى</label>
                  <input type="email" name="email" placeholder="البريد الالكتروني" value="{{ old('email') }}"/>
                  @error('email')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputName1">  كلمة المرور</label>
                    <input  type="password" name="password" placeholder="كلمة المرور" value="{{ old('password') }}">
                    @error('password')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
              </div>
              <button type="submit" class="btn main_btn">ارسال</button>
            <p >التسجيل في الموقع  <a href="{{ route('getregister') }}"> التسجيل </a></p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection

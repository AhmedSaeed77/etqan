@extends('website/core/home')

@section('title', 'التسجيل')
 @section('content')

    <div class="container">
      <div class="contact_us gap-5 py-5 d-grid gap-5">
        <div >
          <h2 class="page_title">  التسجيل</h2>
          <p>التسجيل على الموقع لكى تستفيد بكل جديد</p>
        </div>
        <div class="d-grid d-md-flex justify-content-center gap-5 align-items-start ">
          <div class="contact_form  order-1 order-md-0 ">
            <form method="post" action="{{ route('register') }}" class="d-grid gap-3" enctype="multipart/form-data">
                @csrf
              <div class="d-grid gap-3">
                <div class="d-flex items-center gap-3 row">
                    <label for="exampleInputName1">   الاسم</label>
                  <input type="text" name="name" placeholder="الاسم" value="{{ old('name') }}"/>
                  @error('name')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputName1">  البريد الالكترونى</label>
                  <input type="email" name="email" placeholder="البريد الالكتروني" value="{{ old('email') }}"/>
                  @error('email')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputName1">  الجوال</label>
                    <input  type="number" name="phone" placeholder="الجوال" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputName1"> وثيقة التخرج</label>
                    <input  type="file" name="graduation_document" placeholder="وثيقة التخرج">
                    @error('graduation_document')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                    <label for="exampleInputName1"> شهادة التصنيف المهنى</label>
                    <input  type="file" name="certificate" placeholder="شهادة التصنيف المهنى">
                    @error('certificate')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>

              </div>
              <button type="submit" class="btn main_btn">ارسال</button>
            <p >تمتلك حساب بالفعل  <a href="{{ route('getlogin') }}">تسجيل دخول </a></p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection

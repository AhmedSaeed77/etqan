@extends('dashboard.core.app')
@section('title', __('dashboard.user'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{--                    <h1>@lang('dashboard.Home')</h1>--}}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@lang('dashboard.user')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">@lang('dashboard.Home')</a></li>
                                <li class="breadcrumb-item active">@lang('dashboard.user')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@lang('dashboard.user')</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12">
                                    <p class="lead">{{$user->name}}</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            @isset($user->name)
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.Name'):</th>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            @endisset
                                            @isset($user->company)
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.company'):</th>
                                                <td>{{$user->company->t('name')}}</td>
                                            </tr>
                                            @endisset
                                            @isset($user->email )
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.Email'):</th>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            @endisset
                                            @isset($user->phone  )
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.phone'):</th>
                                                <td>{{$user->phone}}</td>
                                            </tr>
                                            @endisset
                                            @isset($user->direct_manager_name)
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.direct_manager_name'):</th>
                                                <td>{{$user->direct_manager_name}}</td>
                                            </tr>
                                            @endisset
                                            @isset($user->direct_manager_email)
                                            <tr>
                                                <th style="width:50%">@lang('dashboard.direct_manager_email'):</th>
                                                <td>{{$user->direct_manager_email}}</td>
                                            </tr>
                                            @endisset
                                            <tr>
                                                <th style="width:50%">وثيقة التخرج</th>
{{--                                                    <td>{{$jobrequest->cv}}</td>--}}
                                                <td>
                                                    <a href="javascript:void(0)" class="btn invoice-btn col-12 col-sm-4"
                                                       onclick="printPdf('{{ url($user->graduation_document) }}')"
                                                       style="background-color: #007bff; color: white; border-radius: 5px; padding: 10px 20px; text-align: center; display: inline-block; text-decoration: none;">
                                                        @lang('dashboard.download')
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th style="width:50%">      شهاده التصنيف المهنى</th>
{{--                                                    <td>{{$jobrequest->cv}}</td>--}}
                                                <td>
                                                    <a href="javascript:void(0)" class="btn invoice-btn col-12 col-sm-4"
                                                       onclick="printPdf('{{ url($user->certificate) }}')"
                                                       style="background-color: #007bff; color: white; border-radius: 5px; padding: 10px 20px; text-align: center; display: inline-block; text-decoration: none;">
                                                        @lang('dashboard.download')
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js_addons')

    <script>
        function previewImage() {
            var input = document.getElementById('image');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagePreview').attr('src', e.target.result).show();
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function printPdf(link)
        {
            var iframe = document.createElement('iframe');
            iframe.style.display = "none";
            // iframe.style.dir = "rtl";
            iframe.src = link;
            document.body.appendChild(iframe);
            iframe.contentWindow.focus();
            iframe.contentWindow.print();
        }
    </script>

<script>
    function previewImage() {
        var input = document.getElementById('image');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result).show();
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
    <script>
        function printPdf(link)
        {
            var iframe = document.createElement('iframe');
            iframe.style.display = "none";
            // iframe.style.dir = "rtl";
            iframe.src = link;
            document.body.appendChild(iframe);
            iframe.contentWindow.focus();
            iframe.contentWindow.print();
        }
    </script>
@endsection


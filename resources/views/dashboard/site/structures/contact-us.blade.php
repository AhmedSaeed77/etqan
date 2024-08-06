@extends('dashboard.core.app')
@section('title', __('dashboard.content') . ' ' . __('dashboard.contact'))

@section('css_addons')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}"
          xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('dashboard.contact')</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('contact-us-content.store') }}" method="post" autocomplete="off"
                            enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">@lang('dashboard.content') @lang('dashboard.contact')</h3>
                            </div>
                            @csrf
                            <div class="card-body">
                                <!-- Hero Section -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">@lang('dashboard.description') @lang('dashboard.contact')
                                                @lang('dashboard.ar')</label>
                                            <textarea name="ar[contact-us][description]" type="text" class="form-control summernote"
                                                id="exampleInputName1"
                                                      placeholder="" >{!! $content['ar']['contact-us']['description'] ?? '' !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">@lang('dashboard.description') @lang('dashboard.about')
                                                @lang('dashboard.en')</label>
                                            <textarea name="en[contact-us][description]" type="text" class="form-control summernote"
                                                id="exampleInputEmail1"
                                                   placeholder="" >{!! $content['en']['contact-us']['description'] ?? '' !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hero Section -->
                                <hr>
                                <div class="row">
                                    <div class="col-9" style="align-content: center;display: grid;">
                                        <div class="form-group" style="width: 100%;">
                                            <label for="exampleInputFile">@lang('dashboard.image')</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="ar[contact-us][image]" type="hidden" value="file_122">
                                                    <input name="en[contact-us][image]" type="hidden" value="file_122">
                                                    <input name="file[122]" type="file" class="custom-file-input"
                                                           id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                    <input name="old_file[122]" type="hidden"
                                                           value="{{ $content['ar']['contact-us']['image'] ?? null }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <img src="{{ $content['ar']['contact-us']['image'] ?? null }}" style="width: 60%">
                                    </div>
                                </div>

{{--                                <!-- visions Section -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="visionImage">@lang('dashboard.image') @lang('dashboard.vision_section')</label>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-10">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input name="en[vision][image]" type="hidden" value="file_200">--}}
{{--                                                    <input name="ar[vision][image]" type="hidden" value="file_200">--}}
{{--                                                    <input name="file[200]" type="file" class="custom-file-input"--}}
{{--                                                        id="visionImage">--}}
{{--                                                    <input name="old_file[200]" type="hidden"--}}
{{--                                                        value="{{ $content['ar']['vision']['image'] ?? '' }}">--}}
{{--                                                    <label class="custom-file-label" for="visionImage">Choose--}}
{{--                                                        file</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <img src="{{ $content['ar']['vision']['image'] ?? '' }}" style="width: 60%"--}}
{{--                                                alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.title') @lang('dashboard.vision_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[vision][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['vision']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.title') @lang('dashboard.vision_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[vision][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['vision']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.description') @lang('dashboard.vision_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[vision][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['vision']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.description') @lang('dashboard.vision_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[vision][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['vision']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- visions Section -->--}}
{{--                                <hr>--}}


{{--                                <!-- messages Section -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="messageImage">@lang('dashboard.image') @lang('dashboard.message_section')</label>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-10">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input name="en[message][image]" type="hidden" value="file_300">--}}
{{--                                                    <input name="ar[message][image]" type="hidden" value="file_300">--}}
{{--                                                    <input name="file[300]" type="file" class="custom-file-input"--}}
{{--                                                        id="messageImage">--}}
{{--                                                    <input name="old_file[300]" type="hidden"--}}
{{--                                                        value="{{ $content['ar']['message']['image'] ?? '' }}">--}}
{{--                                                    <label class="custom-file-label" for="messageImage">Choose--}}
{{--                                                        file</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <img src="{{ $content['ar']['message']['image'] ?? '' }}" style="width: 60%"--}}
{{--                                                alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.title') @lang('dashboard.message_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[message][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['message']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.title') @lang('dashboard.message_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[message][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['message']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.description') @lang('dashboard.message_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[message][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['message']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.description') @lang('dashboard.message_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[message][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['message']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- messages Section -->--}}
{{--                                <hr>--}}

{{--                                <!-- goals Section -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="goalImage">@lang('dashboard.image') @lang('dashboard.goal_section')</label>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-10">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input name="en[goal][image]" type="hidden" value="file_400">--}}
{{--                                                    <input name="ar[goal][image]" type="hidden" value="file_400">--}}
{{--                                                    <input name="file[400]" type="file" class="custom-file-input"--}}
{{--                                                        id="goalImage">--}}
{{--                                                    <input name="old_file[400]" type="hidden"--}}
{{--                                                        value="{{ $content['ar']['goal']['image'] ?? '' }}">--}}
{{--                                                    <label class="custom-file-label" for="goalImage">Choose--}}
{{--                                                        file</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <img src="{{ $content['ar']['goal']['image'] ?? '' }}" style="width: 60%"--}}
{{--                                                alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.title') @lang('dashboard.goal_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[goal][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['goal']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.title') @lang('dashboard.goal_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[goal][title]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['goal']['title'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.description') @lang('dashboard.goal_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[goal][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['goal']['description'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.description') @lang('dashboard.goal_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[goal][description]" type="text" class="form-control"--}}
{{--                                                id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['goal']['description'] ?? '' }}" placeholder=""--}}
{{--                                                required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- goals Section -->--}}
{{--                                <hr>--}}

{{--                                <!-- Statisticss Section -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.title') @lang('dashboard.platform_statistics_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[platform_statistics][title]" type="text"--}}
{{--                                                class="form-control" id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['platform_statistics']['title'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.title') @lang('dashboard.platform_statistics_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[platform_statistics][title]" type="text"--}}
{{--                                                class="form-control" id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['platform_statistics']['title'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputName1">@lang('dashboard.description') @lang('dashboard.platform_statistics_section')--}}
{{--                                                @lang('dashboard.ar')</label>--}}
{{--                                            <input name="ar[platform_statistics][description]" type="text"--}}
{{--                                                class="form-control" id="exampleInputName1"--}}
{{--                                                value="{{ $content['ar']['platform_statistics']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">@lang('dashboard.description') @lang('dashboard.platform_statistics_section')--}}
{{--                                                @lang('dashboard.en')</label>--}}
{{--                                            <input name="en[platform_statistics][description]" type="text"--}}
{{--                                                class="form-control" id="exampleInputEmail1"--}}
{{--                                                value="{{ $content['en']['platform_statistics']['description'] ?? '' }}"--}}
{{--                                                placeholder="" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                @for ($i = 0; $i < 4; $i++)--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input name="en[platform_statistics][content][{{ $i }}][icon]"--}}
{{--                                                    type="hidden" value="file_{{500 +$i}}">--}}
{{--                                                <input name="ar[platform_statistics][content][{{ $i }}][icon]"--}}
{{--                                                    type="hidden" value="file_{{500 +$i}}"--}}
{{--                                                    >--}}
{{--                                                <input name="file[{{500 +$i}}]" type="file" class="custom-file-input"--}}
{{--                                                    id="exampleInputFile">--}}
{{--                                                <input name="old_file[{{500 +$i}}]" type="hidden"--}}
{{--                                                    value="{{ $content['ar']['platform_statistics']['content'][$i]['icon'] ?? '' }}">--}}
{{--                                                <label class="custom-file-label" for="exampleInputFile">Choose--}}
{{--                                                    file</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <input required--}}
{{--                                                name="ar[platform_statistics][content][{{ $i }}][title]"--}}
{{--                                                value="{{ $content['ar']['platform_statistics']['content'][$i]['title'] ?? '' }}"--}}
{{--                                                type="text" class="form-control" id="exampleInputMainTitle2"--}}
{{--                                                placeholder="{{__('dashboard.title') . __('dashboard.ar')}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <input required--}}
{{--                                                name="en[platform_statistics][content][{{ $i }}][title]"--}}
{{--                                                value="{{ $content['en']['platform_statistics']['content'][$i]['title'] ?? '' }}"--}}
{{--                                                type="text" class="form-control" id="exampleInputMainTitle2"--}}
{{--                                                placeholder="{{__('dashboard.title') . __('dashboard.en')}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <input required--}}
{{--                                                name="all[platform_statistics][content][{{ $i }}][count]"--}}
{{--                                                type="number" min="0" class="form-control" id="exampleInputMainTitle2"--}}
{{--                                                value="{{ $content['ar']['platform_statistics']['content'][$i]['count'] ?? '' }}"--}}
{{--                                                placeholder="{{ __('dashboard.count') }}">--}}

{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <img src="{{ $content['ar']['platform_statistics']['content'][$i]['icon'] ?? '' }}"--}}
{{--                                                style="width: 60%">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endfor--}}


{{--                                <!-- Statisticss Section -->--}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-dark">@lang('dashboard.Publish')</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js_addons')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
            $('.select2').select2({
                language: {
                    searching: function() {}
                },
            });
        });
    </script>
@endsection

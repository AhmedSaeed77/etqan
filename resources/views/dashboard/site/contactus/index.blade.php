@extends('dashboard.core.app')
@section('title', __('titles.Messages'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('dashboard.Messages')</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">@lang('dashboard.Messages')</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div style="overflow-x:scroll;" class="card-body">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>

                                    <th style="width: 10px">#</th>
                                    <th>@lang('dashboard.Name')</th>
                                    <th>@lang('dashboard.Email')</th>

                                    <th>@lang('dashboard.Operations')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($contactuses as $key => $contactus)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$contactus->name}}</td>
                                        <td>{{$contactus->email}}</td>
                                        <td>
                                            <div class="operations-btns" style="">
                                                <!-- <a href="{{ route('contactus.show', $contactus['id']) }}" class="btn  btn-dark">@lang('dashboard.Show')</a> -->

                                                    <button class="btn btn-secondary waves-effect waves-light" data-toggle="modal" data-target="#reply-modal{{$key}}">@lang('dashboard.Reply')</button>

                                                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#show-modal{{$key}}">@lang('dashboard.Show')</button>

                                                    <button class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$key}}">@lang('dashboard.Delete')</button>

                                                <div id="delete-modal{{$key}}" class="modal fade modal2 " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">@lang('dashboard.confirm_delete')</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>@lang('dashboard.sure_delete')</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    @lang('dashboard.close')
                                                                </button>
                                                                <form action="{{route('contactus.destroy' , $contactus['id'])}}" method="post">
                                                                    @csrf
                                                                    {{method_field('DELETE')}}
                                                                    <button type="submit" class="btn btn-danger">@lang('dashboard.Delete')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="show-modal{{$key}}" class="modal fade modal2 " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">@lang('dashboard.Show')</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p>{!! $contactus['message'] !!}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    @lang('dashboard.close')
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="reply-modal{{$key}}" class="modal fade modal2 " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">@lang('dashboard.Reply')</h5>
                                                            </div>
                                                            <form action="{{route('contactus.reply' , $contactus['id'])}}" method="post">
                                                                    @csrf
                                                            <div class="modal-body">
                                                            <textarea class="form-control summernote" name="reply" id="form-control summernote" requird></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    @lang('dashboard.close')
                                                                </button>

                                                                    <button type="submit" class="btn btn-danger">@lang('dashboard.Reply')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    @include('dashboard.core.includes.no-entries', ['columns' => 6])
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{ $contactuses->links() }}
                        </div>




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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn_delete_all").click(function () {
            var selected = [];
            $("#example1 input[type=checkbox]:checked").each(function () {
                if (this.id !== 'example-select-all') {
                    selected.push($(this).val());
                }
            });

            if (selected.length > 0) {

                $('#delete_all_modal').modal('show');
                $('input[name="delete_all_id"]').val(selected.join(','));
            }
        });

        // Check/Uncheck all checkboxes when the "Select All" checkbox is clicked
        $('#example-select-all').click(function () {
            var checkboxes = $("#example1 input[type=checkbox]");
            checkboxes.prop('checked', $(this).prop('checked'));
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#btn_reply_all").click(function () {
            var selected = [];
            $("#example1 input[type=checkbox]:checked").each(function () {
                if (this.id !== 'example-select-all') {
                    selected.push($(this).val());
                }
            });

            if (selected.length > 0) {
                $('#reply_all_modal').modal('show');
                $('input[name="reply_all_id"]').val(selected.join(','));
            }
        });

        // Check/Uncheck all checkboxes when the "Select All" checkbox is clicked
        $('#example-select-all').click(function () {
            var checkboxes = $("#example1 input[type=checkbox]");
            checkboxes.prop('checked', $(this).prop('checked'));
        });
    });
</script>

@endsection

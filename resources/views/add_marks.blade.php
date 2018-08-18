@extends('layouts.app')
@section('content')

<div class="container">
                    <form method="POST" action="{{ route('store_data') }}">
                        @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Roll Number :<span style="color: red">*</span> </label>
                                    <input id="roll_no"  type="text" name="s_roll_no" class="form-control" placeholder="Enter roll no">
                                    @if ($errors->has('s_roll_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('s_roll_no') }}</strong>
                                </span>
                                @endif

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Maths :<span style="color: red">*</span> </label>

                                    <input id="maths"  type="text" name="maths" class="form-control" placeholder="Enter maths marks">
                                    @if ($errors->has('maths'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('maths') }}</strong>
                                    </span>
                                    @endif

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Science  :<span style="color: red">*</span> </label>
                                    <input id="science"  type="text" name="science" class="form-control" placeholder="Enter science marks">
                                    @if ($errors->has('science'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('science') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>English :<span style="color: red">*</span> </label>

                                    <input id="english"  type="text" name="english" class="form-control" placeholder="Enter english marks">
                                    @if ($errors->has('english'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('english') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                    


                        
                    </div>
                    <div class="form-group row mb-0">
                        <div style="margin-left: 30px">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                                <button type="button" class="btn btn-danger" onclick="javascript:history.back();">Cancel</button>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
</div>
<!--</form>-->
<!--END MODAL EDIT-->


<div id="Modal_Delete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" id="id" class="form-control">
                <button id="modal" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btn_del" type="submit" class="btn btn-primary" data-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        $('.table').on('click', '#edit_vehicle', function() {

            var id = $(this).data('id');
            $.ajax({
                url: 'marks_edit/' + id,
                type: "GET",
                dataType: "json",
                success: function(data) {

                    $('#m_id').val(data.id);
                    $('#roll_no').val(data.s_roll_no);
                    $('#maths').val(data.maths);
                    $('#science').val(data.science);
                    $('#english').val(data.english);
                    $('#remark').val(data.remark);
                    $(".GlobalFormValidation").attr("action", "marks_update/" + id);
                }
            });
        });




        $('.table').on('click', '.delete_row', function() {
            var id = $(this).attr('data-id');
            $(this).closest('tr').remove();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax(
                    {
                        url: "marks_delete/" + id,
                        type: 'get', // replaced from put
                        dataType: "JSON",
                        success: function(response)
                        {
                            console.log(response); // see the reponse sent
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText); // this line will save you tons of hours while debugging
                            // do something here because of error
                        }
                    });

        });

    });
</script>
@endsection
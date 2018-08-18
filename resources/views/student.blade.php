@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(@$students_edit)
                @php($button ='Update')
                @php($register ='Update Student')
                @else
                @php($button ='Register')
                @php($register ='Student Register')
                @endif
                <div class="card-header">{{ $register }}</div>

                <div class="card-body">
                    @if(isset($students_edit))
                    {{ Form::open(array('route' => ['update',$students_edit->id],'files'=>true)) }}	
                    @endif
                    <form method="POST" action="{{ route('student_register') }}" aria-label="{{ __('Student Register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="roll_no" class="col-md-4 col-form-label text-md-right">{{ __('Roll No') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="roll_no" type="text" class="form-control{{ $errors->has('roll_no') ? ' is-invalid' : '' }}" name="roll_no" value="{{@$students_edit->roll_no}}" autofocus>

                                @if ($errors->has('roll_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roll_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{@$students_edit->first_name}}">

                                @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{@$students_edit->last_name}}" >

                                @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="last_name" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{@$students_edit->dob}}">

                                @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                @if(@$students_edit)
                                {!! Form::radio('gender', 'male',(@$students_edit->gender =='male'),array('id'=>'sex')) !!}Male
                                @else
                                {!! Form::radio('gender', 'male',true,array('id'=>'sex')) !!}Male
                                @endif
                                {!! Form::radio('gender', 'female', (@$students_edit->gender =='female'), array('id'=>'sex')) !!}  Female

                                @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                {!! Form::select('class', array('1' => 'Class 1', '2' => 'Class 2', '3' => 'Class 3'),(@$students_edit->class),['class' => 'form-control']) !!}

                                @if ($errors->has('class'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('class') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                {!! Form::file('image', array('class' => 'form-control')) !!}
                                @if ($errors->has('image'))
                                <div class="error" style="color: red">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ $button }}
                                </button>
                                <button type="button" class="btn btn-danger" onclick="javascript:history.back();">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

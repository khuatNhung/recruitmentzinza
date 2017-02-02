@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm mới tin tuyển dụng</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recruitment.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {{-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    {!! Form::open(array('route' => 'recruitment.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <strong>Tiêu đề</strong>
                {!! Form::text('title', null, array('placeholder' => 'tiêu đề','class' => 'form-control')) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ảnh</strong>
                {!! Form::text('image', null, array('placeholder' => 'Click to choose image','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vị trí tuyển dụng</strong>
                {!! Form::text('position', null, array('placeholder' => 'Vị trí tuyển dụng','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Địa chỉ làm việc</strong>
                {!! Form::text('address_work', null, array('placeholder' => 'Địa chỉ làm việc','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Yêu cầu</strong>
                {!! Form::textarea('requirement', null, array('placeholder' => 'Yêu cầu','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quyền lợi</strong>
                {!! Form::textarea('benefit', null, array('placeholder' => 'Quyền lợi','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả</strong>
                {!! Form::textarea('description', null, array('placeholder' =>'Mô tả','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                <strong>Ngày hết hạn</strong>
                {!! Form::text('deadline', null, array('id'=>'deadline2','placeholder' => 'Ngày hết hạn','class' => 'form-control')) !!}
                @if ($errors->has('deadline'))
                    <span class="help-block">
                        <strong>{{ $errors->first('deadline') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

{{-- @endsection --}}
@stop
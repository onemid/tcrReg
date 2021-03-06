@extends('layout.general')

@section('content')

    {!! Form::open(['url'=> 'verify']) !!}
        <div class="row">

            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    {!! Form::label('verify', '請填入簡訊或電子郵件所傳送之驗證碼') !!}
                    {!! Form::text('verify', null, ['placeholder' => '驗證碼共六碼', 'class' => 'form-control']) !!}
                    @if ($errors->has('verify')) <h5 class="text-danger">{{ $errors->first('verify') }}</h5> @endif
                    @if (isset($alert_failed)) <h5 class="text-danger">驗證碼不存在</h5> @endif
                </div>
                <div class="form-group">
                    {!! Form::label('robot', '請進行機器人驗證') !!}
                    {!! Recaptcha::render() !!}
                    @if ($errors->has('g-recaptcha-response')) <h5 class="text-danger">{{ $errors->first('g-recaptcha-response') }}</h5> @endif
                </div>
                <div class="form-group">
                    {!! Form::submit('確認送出', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            <div class="col-lg-4">
            </div>

        </div>

    {!! Form::close() !!}

    @stop


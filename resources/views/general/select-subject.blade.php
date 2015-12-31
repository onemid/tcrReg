@extends('layout.general')

@section('content')

    {!! Form::open(['url'=> '/general/select-subject']) !!}
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><strong>105/01/31</strong> 場次活動報名</div>
                        <div class="panel-body">
                            <div class="form-group">
                                @if ($errors->has('reg_subject_1')) <h5 class="text-danger">{{ $errors->first('reg_subject_1') }}</h5> @endif

                                {!! Form::label('reg_subject_1', '不報名') !!}
                                {!! Form::radio('reg_subject_1', '0') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國中國文') !!}
                                {!! Form::radio('reg_subject_1', '10001') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國小國文') !!}
                                {!! Form::radio('reg_subject_1', '10002') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國中自然') !!}
                                {!! Form::radio('reg_subject_1', '10003') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國小自然') !!}
                                {!! Form::radio('reg_subject_1', '10004') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國中歷史') !!}
                                {!! Form::radio('reg_subject_1', '10005') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國中地理') !!}
                                {!! Form::radio('reg_subject_1', '10006') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國中公民') !!}
                                {!! Form::radio('reg_subject_1', '10007') !!}
                                <br>
                                {!! Form::label('reg_subject_1', '國小社會') !!}
                                {!! Form::radio('reg_subject_1', '10008') !!}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading"><strong>105/02/01</strong> 場次活動報名</div>
                        <div class="panel-body">
                            <div class="form-group">
                                @if ($errors->has('reg_subject_2')) <h5 class="text-danger">{{ $errors->first('reg_subject_2') }}</h5> @endif

                                {!! Form::label('reg_subject_2', '不報名') !!}
                                {!! Form::radio('reg_subject_2', '0') !!}
                                <br>
                                {!! Form::label('reg_subject_2', '國中數學') !!}
                                {!! Form::radio('reg_subject_2', '20001') !!}
                                <br>
                                {!! Form::label('reg_subject_2', '國小數學') !!}
                                {!! Form::radio('reg_subject_2', '20002') !!}
                                <br>
                                {!! Form::label('reg_subject_2', '國中英文') !!}
                                {!! Form::radio('reg_subject_2', '20003') !!}
                                <br>
                                {!! Form::label('reg_subject_2', '國小英文') !!}
                                {!! Form::radio('reg_subject_2', '20004') !!}


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">確認送出</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <h5 class="text-muted">＊請核對填寫是否有誤，若無誤請確認送出。</h5>
                               {!! Form::submit('確認送出', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    {!! Form::close() !!}

    @stop


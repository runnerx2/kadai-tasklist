@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    @if (Auth::check())
    
        <div class="row">
            <div class="col-6">
                {!! Form::model($task, ['route' => 'tasks.store']) !!}
                    
                    <div class="form-group">
                        {!! Form::label('status', 'ステータス:') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('content', 'タスク:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
            
                    {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
            </div>
        </div>

    @else
        <h2><font color="#ff0000">ログインしてください</font></h2>
    @endif

@endsection
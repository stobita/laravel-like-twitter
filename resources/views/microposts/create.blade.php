@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>新規投稿</h1>
        {{Form::open(['route' => ['microposts.store'], 'method' => 'POST'])}}
            <div class="form-group">
                {{Form::label('content', '内容', ['class' => ''])}}
                <div class="control">
                    {{Form::textarea('content',null,['class' => ''])}}
                </div>
            </div>
            <div class="form-group">
                <div class="control">
                    {{Form::submit('投稿', ['class' => 'btn-primary'])}}
                </div>
            </div>
        {{Form::close()}}
    </div>
@endsection

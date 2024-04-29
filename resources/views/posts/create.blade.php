@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{ html()->form('POST', '/posts')->acceptsFiles()->open() }}
    <div class="form-group">
        {{ html()->label('Title', 'title') }}
        {{ html()->text('title', '')->placeholder('Title')->class(['form-control']) }}
    </div>
    <div class="form-group">
        {{ html()->label('Body', 'body') }}
        {{ html()->textarea('body', '')->placeholder('Body')->class(['form-control']) }}
    </div>
    <div class="form-group">
        {{ html()->file('cover_image') }}
    </div>
    {{ html()->submit('Submit')->class(['btn', 'btn-primary']) }}
    {{ html()->form()->close() }}
@endsection
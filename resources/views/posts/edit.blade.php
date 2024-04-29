@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {{ html()->form('PUT', '/posts/' . $post->id)->open() }}
    <div class="form-group">
        {{ html()->label('Title', 'title') }}
        {{ html()->text('title', $post->title)->placeholder('Title')->class(['form-control']) }}
    </div>
    <div class="form-group">
        {{ html()->label('Body', 'body') }}
        {{ html()->textarea('body', $post->body)->placeholder('Body')->class(['form-control']) }}
    </div>
    {{ html()->submit('Submit')->class(['btn', 'btn-primary']) }}
    {{ html()->form()->close() }}
@endsection